<?php

use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;

uses(DatabaseTruncation::class);

test('example', function () {
    $this->browse(function (Browser $browser) {

        $duskUser = User::factory()
            ->hasAttached(
                Team::factory()
                    ->state(function (array $attributes, User $user) {
                        return ['user_id' => $user->id, 'personal_team' => true];
                    }),
            )->create();

        $browser->visit('/login')
                ->type('input[id=email]', $duskUser->email)
                ->type('input[id=password]', 'password')
                ->press('@login-button')
                ->waitForTextIn('h2', 'Dashboard')
                ->assertPathIs('/dashboard')
                ->screenshot('login_success');
    });
});
