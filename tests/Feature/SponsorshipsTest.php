<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SponsorshipsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_view_sponsorships_page()
    {
        $this->get('/')->assertSuccessful();
    }

    /** @test */
    function can_fetch_developers_partial()
    {
        factory(User::class, 5)->create();

        $this->get('/partials/developers')
            ->assertViewHas('users', function ($users) {
                return count($users) === 5;
            })
            ->assertSuccessful();
    }
}
