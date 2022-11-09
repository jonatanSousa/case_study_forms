<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiReturnsSuccessfulGetResponse()
    {
        //Only works when docker is up
        $this->markTestSkipped();

        $response = $this->get('/forms');
        $response->assertStatus(200);
    }
}
