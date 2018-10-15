<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChangePasswordTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function userCanUpdateTheirPassword()
    {
        $user = factory(User::class)->create(['password' => Hash::make('current_password')]);

        $this->actingAs($user)
            ->json('PATCH', route('auth.change_password'), [
                'current_password' => 'current_password',
                'new_password' => 'new_password',
                'new_password_confirmation' => 'new_password',
            ]);

        $this->assertTrue(Hash::check('new_password', $user->fresh()->password));
    }

    /** @test */
    public function adminCanUpdateAnotherUsersPassword()
    {
        $admin = factory(User::class)->create(['role_id' => 1]);
        $user = factory(User::class)->create(['password' => Hash::make('current_password')]);

        $this->actingAs($admin)
            ->json('PATCH', route('admin.users.update', $user->id), [
                'name' => $user->name,
                'email' => $user->email,
                'role_id' => $user->role_id,
                'board_member' => $user->board_member,
                'password' => 'new_password',
            ]);

        $this->assertTrue(Hash::check('new_password', $user->fresh()->password));
    }

    /** @test */
    public function nonAdminCantChangeAnotherUsersPassword()
    {
        $user = factory(User::class)->create(['password' => Hash::make('old_password')]);
        $user2 = factory(User::class)->create();

        $this->actingAs($user2)
            ->json('PATCH', route('admin.users.update', $user->id), [
                'name' => $user->name,
                'email' => $user->email,
                'role_id' => $user->role_id,
                'board_member' => $user->board_member,
                'password' => 'new_password',
            ]);

        $this->assertTrue(Hash::check('old_password', $user->fresh()->password));
        $this->assertFalse(Hash::check('new_password', $user->password));
    }
}
