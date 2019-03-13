<?php
namespace App;
use App\Products_model;
use App\Decorator;

class TableDecorator extends Decorator{
    public function show()
    {
        $products=Products_model::orderBy('created_at','desc')->get();
        return $products;
    }
}