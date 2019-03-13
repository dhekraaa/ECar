<?php
namespace App;
use App\Products_model;

class ProductsCollection implements \IteratorAggregate
{
    private $products;

    public function __construct()
    {
        $this->products  = Products_model::orderBy('created_at','desc')->get()->toArray();
    }

    public function getIterator()
    {
        return new ProductIterator($this);
    }

    public function getProduct($key)
    {
        if (isset($this->products[$key])) {
            return $this->products[$key];
        }
        return null;
    }
}
?>