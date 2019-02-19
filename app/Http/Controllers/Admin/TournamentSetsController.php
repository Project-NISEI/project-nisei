<?php

namespace App\Http\Controllers\Admin;

use App\TournamentSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTournamentSetsRequest;
use App\Http\Requests\Admin\UpdateTournamentSetsRequest;

class TournamentSetsController extends Controller
{
    /**
     * Display a listing of TournamentSet
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('tournamentset_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('tournamentset_delete')) {
                return abort(401);
            }
            $tournamentsets = TournamentSet::onlyTrashed()->get();
        } else {
            $tournamentsets = TournamentSet::all();
        }

        return view('admin.tournamentsets.index', compact('tournamentsets'));
    }

    /**
     * Show the form for creating new TournamentSet.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('tournamentset_create')) {
            return abort(401);
        }
        
        return view('admin.tournamentsets.create');
    }

    /**
     * Store a newly created TournamentSet in storage.
     *
     * @param  \App\Http\Requests\StoreTournamentSetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTournamentSetsRequest $request)
    {
        if (! Gate::allows('tournamentset_create')) {
            return abort(401);
        }
        $tournamentset = TournamentSet::create($request->all());



        return redirect()->route('admin.tournamentsets.index');
    }


    /**
     * Show the form for editing TournamentSet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('tournamentset_edit')) {
            return abort(401);
        }
        
        $tournamentset = TournamentSet::findOrFail($id);

        return view('admin.tournamentsets.edit', compact('tournamentset'));
    }

    /**
     * Update TournamentSet in storage.
     *
     * @param  \App\Http\Requests\UpdateTournamentSetsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTournamentSetsRequest $request, $id)
    {
        if (! Gate::allows('tournamentset_edit')) {
            return abort(401);
        }
        $tournamentset = TournamentSet::findOrFail($id);
        $tournamentset->update($request->all());



        return redirect()->route('admin.tournamentsets.index');
    }


    /**
     * Display TournamentSet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('tournamentset_view')) {
            return abort(401);
        }
        $tournamentset = TournamentSet::findOrFail($id);

        return view('admin.tournamentsets.show', compact('tournamentset'));
    }


    /**
     * Remove TournamentSet from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('tournamentset_delete')) {
            return abort(401);
        }
        $tournamentset = TournamentSet::findOrFail($id);
        $tournamentset->delete();

        return redirect()->route('admin.tournamentsets.index');
    }

    /**
     * Delete all selected TournamentSet at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('tournamentset_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = TournamentSet::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore TournamentSet from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('tournamentset_delete')) {
            return abort(401);
        }
        $tournamentset = TournamentSet::onlyTrashed()->findOrFail($id);
        $tournamentset->restore();

        return redirect()->route('admin.tournamentsets.index');
    }

    /**
     * Permanently delete TournamentSet from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('tournamentset_delete')) {
            return abort(401);
        }
        $tournamentset = TournamentSet::onlyTrashed()->findOrFail($id);
        $tournamentset->forceDelete();

        return redirect()->route('admin.tournamentsets.index');
    }
}
