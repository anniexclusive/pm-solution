<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RandomArmyControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInvalidData()
    {
        $response = $this->get('/api/generate/-6'); // or /api/generate/xyz

        $response->assertStatus(422)
                ->assertJson([
                    "message" => "Error! Invalid data given.",                    
                ]);
    }

    public function testValidData()
    {
        $response = $this->get('/api/generate/167');

        $response->assertStatus(200)
                ->assertJsonStructure([                    
                        'spearmen',
                        'swordsmen',
                        'archers',
                ]);
    }
}
