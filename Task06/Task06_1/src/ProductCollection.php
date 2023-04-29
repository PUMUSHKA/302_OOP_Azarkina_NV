<?php

namespace App;

class ProductCollection
{
    private $products = array();

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function filter(ProductFilteringStrategy $filterStrategy): ProductCollection
    {
        $filteredProducts = array();
        foreach ($this->products as $key => $value) {
            if ($filterStrategy->filter($value)) {
                $filteredProducts[] = $value;
            }
        }
        return new ProductCollection($filteredProducts);
    }

    public function getProductsArray()
    {
        return $this->products;
    }
}
