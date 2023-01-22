<?php

namespace Tests\Feature\Services\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\Product\GetProductService;
use Illuminate\Support\Facades\Http;

class GetProductServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetProduct()
    {
        $url = 'https://fakestoreapi.com/products/1';
        $data = Http::get($url);
        $response = $data->json();
        $response->assertStatus(200)
            ->assertJsonStructure(
                [
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
                ]
            );
    }
}
