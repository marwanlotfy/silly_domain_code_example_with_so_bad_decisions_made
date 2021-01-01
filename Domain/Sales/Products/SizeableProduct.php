<?php

namespace Domain\Sales\Products;

class SizeableProduct extends Product 
{
    private $price;
    private $size;
    
    public function getCost()
    {
        return $this->price;
    }
}
