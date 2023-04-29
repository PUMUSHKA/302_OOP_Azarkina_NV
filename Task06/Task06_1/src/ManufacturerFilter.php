<?php

namespace App;

class ManufacturerFilter implements ProductFilteringStrategy
{
    private $manufacturer;

    public function __construct($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
    public function filter(Product $product): bool
    {
        return $this->manufacturer === $product->manufacturer;
    }
}
