<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_login_form(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    
}
