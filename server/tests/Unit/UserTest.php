<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testShowUserByUuid(): void
    {
        $response = $this->getJson("/api/user/show");

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "name",
            "email",
            "password"
        ]);
    }
}
