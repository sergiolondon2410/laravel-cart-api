<?php

namespace Tests\Feature\Services\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\Product\GetProductService;

class GetProductServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetAllProducts()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
