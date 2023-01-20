<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
//use Illuminate\Support\Facades\Http;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        //$response = Http::get('https://fakestoreapi.com/products');
        //$product = collect($response->json());
        return [
            'title' => $this->resource['title']
        ];
    }
}
