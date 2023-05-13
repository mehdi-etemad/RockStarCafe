<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Option;

class OptionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testInsert(): void
    {
        $optionData = new Option();
        $optionData->name = 'Opion - 1';
        $optionData->save();
        $this->assertDatabaseHas('option', $optionData);
    }
}
