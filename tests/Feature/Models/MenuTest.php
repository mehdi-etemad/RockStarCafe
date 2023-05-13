<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testInsert(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
