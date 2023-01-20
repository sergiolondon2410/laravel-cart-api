<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;

class FakestoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    /*public function toArray($request)
    {
        return parent::toArray($request);
    }*/

    public function getProduct($id)
    {
        $query = 'https://fakestoreapi.com/products/'.$id;
        $response = Http::get($query);
        $data = $response->json();
        return ProductResource::make($data)->resolve();
    }
}
