<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateOrderEndpoint()
    {
        $payload = [
            'name' => 'John Test',
            'email' => 'test@email.com',
            'address' => 'Test address',
            'state' => 'California',
            'city' => 'Pasadena',
            'zipcode' => '91001',
            'items' => [
                ['product_id' => 3, 'quantity' => 2],
                ['product_id' => 4, 'quantity' => 1]
            ]
        ];

        $this->json('POST', '/api/v1/orders', $payload)
            ->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => "Order was created successfully!"
            ]);
    }
}
