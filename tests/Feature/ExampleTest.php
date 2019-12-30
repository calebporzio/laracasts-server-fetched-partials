<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    protected $something;

    public function __construct($something)
    {
        $this->something = $something;
    }

    public function testBasicTest($hey)
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
