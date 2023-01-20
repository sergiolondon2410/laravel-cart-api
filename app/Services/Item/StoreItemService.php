<?php

namespace App\Services\Item;
use App\Models\Item;
use App\Services\Product\GetProductService;

class StoreItemService
{
    private $getProductService;

    public function __construct(GetProductService $getProductService)
    {
        $this->getProductService = $getProductService;
    }

    public function storeItems($order_id, $items)
    {
        $total = 0;

        foreach ($items as $item) {
            $total += $this->create($order_id, $item);
        }
        
        return $total;
    }

    public function create($order_id, $data){

        $product = $this->getProductService->get($data["product_id"]);
        
        $item = Item::create([
            'order_id' => $order_id,
            'product_id' => $data["product_id"],
            'product_title' => $product["title"],
            'product_price' => $product["price"] * 100,
            'quantity' => $data["quantity"],
        ]);
        
        $subtotal = $data["quantity"] * $product["price"] * 100;

        return $subtotal;
    }
}