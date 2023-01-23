<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetProductsEndpoint()
    {
        $response = $this->get('/api/v1/product/');
        dd($response->json());
        $response->assertStatus(200)
            ->assertJsonStructure(
                [
                    'status',
                    'products' => [
                        '*' => [
                            'id',
                            'title',
                            'price',
                            'description',
                            'category',
                            'image',
                            'rating' => [
                                'rate',
                                'count'
                            ],
                        ],
                    ],
                ]
            );
    }
}
