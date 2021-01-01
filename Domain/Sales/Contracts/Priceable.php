<?php

namespace Domain\Sales\Contracts;

interface Priceable
{
    public function getCost();
}