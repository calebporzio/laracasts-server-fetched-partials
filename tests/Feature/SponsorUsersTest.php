<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SponsorUsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_view_sponsorships_page()
    {
        $this->get('/')->assertSuccessful();
    }

    /** @test */
    function can_fetch_sponsorships_partial()
    {
        factory(User::class, 5)->create();

        $this->get('/partials/sponsorships')
            ->assertSuccessful()
            ->assertViewHas('users', function ($users) {
                return count($users) === 5;
            });
    }
}
