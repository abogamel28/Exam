<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_database()
    {
        $this->assertDatabaseHas('admins',[
            'name' => 'Mel'
        ]);
    }

    public function test_missing_database()
    {
        $this->assertDatabaseMissing('admins',[
            'name' => 'Lem'
        ]);
    }

}
