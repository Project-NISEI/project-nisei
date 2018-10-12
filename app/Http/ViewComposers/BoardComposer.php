<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\User;

class BoardComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(User $users)
    {
        // Dependencies automatically resolved by service container...
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