<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_redirects_login_when_not_authenticated()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
        $response->assertRedirect('login');
    }
}
