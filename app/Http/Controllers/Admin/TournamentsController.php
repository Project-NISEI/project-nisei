<?php

namespace App\Http\Controllers\Admin;

use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTournamentsRequest;
use App\Http\Requests\Admin\UpdateTournamentsRequest;

class TournamentsController extends Controller
{
    /**
     * Display a listing of Tournament.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('tournament_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('tournament_delete')) {
                return abort(401);
            }
            $tournaments = Tournament::onlyTrashed()->get();
        } else {
            $tournaments = Tournament::all();
        }

        return view('admin.tournaments.index', compact('tournaments'));
    }

    /**
     * Show the form for creating new Tournament.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('tournament_create')) {
            return abort(401);
        }
	
        $enum_region = Tournament::$enum_region;
        $tournamentsets = \App\TournamentSet::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.tournaments.create', compact('enum_region','tournamentsets'));
    }

    /**
     * Store a newly created Tournament in storage.
     *
     * @param  \App\Http\Requests\StoreTournamentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTournamentsRequest $request)
    {
        if (! Gate::allows('tournament_create')) {
            return abort(401);
        }
        $tournament = Tournament::create($request->all());



        return redirect()->route('admin.tournaments.index');
    }


    /**
     * Show the form for editing Tournament.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('tournament_edit')) {
            return abort(401);
        }
        
        $enum_region = Tournament::$enum_region;
        $tournamentsets = \App\TournamentSet::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
	
        $tournament = Tournament::findOrFail($id);

        return view('admin.tournaments.edit', compact('tournament', 'enum_region', 'tournamentsets'));
    }

    /**
     * Update Tournament in storage.
     *
     * @param  \App\Http\Requests\UpdateTournamentsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTournamentsRequest $request, $id)
    {
        if (! Gate::allows('tournament_edit')) {
            return abort(401);
        }

        $tournament = Tournament::findOrFail($id);
        $requestData = $request->all();

        if ($request->listing_image) {
            $request->file('listing_image')->move(
                base_path() . '/public/listing_images/', $request->listing_image->getClientOriginalName()
            );

            $requestData['listing_image'] = '/listing_images/' . $request->listing_image->getClientOriginalName();
        } else {
            $requestData['listing_image'] = $tournament->listing_image;
        }

        $tournament->update($requestData);

        return redirect()->route('admin.tournaments.index');
    }


    /**
     * Display Tournament.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('tournament_view')) {
            return abort(401);
        }
        $tournament = Tournament::findOrFail($id);

        return view('admin.tournaments.show', compact('tournament'));
    }


    /**
     * Remove Tournament from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('tournament_delete')) {
            return abort(401);
        }
        $tournament = Tournament::findOrFail($id);
        $tournament->delete();

        return redirect()->route('admin.tournaments.index');
    }

    /**
     * Delete all selected Tournament at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('tournament_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Tournament::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Tournament from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('tournament_delete')) {
            return abort(401);
        }
        $tournament = Tournament::onlyTrashed()->findOrFail($id);
        $tournament->restore();

        return redirect()->route('admin.tournaments.index');
    }

    /**
     * Permanently delete Tournament from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('tournament_delete')) {
            return abort(401);
        }
        $tournament = Tournament::onlyTrashed()->findOrFail($id);
        $tournament->forceDelete();

        return redirect()->route('admin.tournaments.index');
    }
}
