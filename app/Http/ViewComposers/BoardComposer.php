<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\User;

class BoardComposer
{
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  User  $users
     * @return void
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $users = $this->users::select('name', 'position_name', 'pronouns')
                    ->where('board_member', 1)
                    ->get();

        $view->with('users', $users);
    }
}