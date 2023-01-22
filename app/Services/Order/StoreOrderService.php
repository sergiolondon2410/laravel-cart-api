<?php

namespace App\Services\Order;
use App\Models\Order;
use App\Services\Item\StoreItemService;

class StoreOrderService
{
    private $storeItemService;

    public function __construct(StoreItemService $storeItemService)
    {
        $this->storeItemService = $storeItemService;
    }
    
    public function create($data){
        $order = Order::create([
            'name' => $data["name"],
            'email' => $data["email"],
            'address' => $data["address"],
            'state' => $data["state"],
            'city' => $data["city"],
            'zipcode' => $data["zipcode"],
        ]);
        $item_data = json_decode($data["items"], true);
        $total = $this->storeItemService->storeItems($order->id, $item_data);
        $order->total = $total;
        $order->save();
        return $total;
    }
}