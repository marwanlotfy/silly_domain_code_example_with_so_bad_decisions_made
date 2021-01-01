<?php

namespace Domain\Sales;

use Domain\Sales\Contracts\Priceable;

class Order implements Priceable
{
    private $products = [];
    private $customer;
    private $promoter;

    public function getCost()
    {
        $cost = 0 ;
        foreach ($this->products as $product) {
            $cost += $product->getCost();
        }
        return $cost;
    }
}
