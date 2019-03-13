<?php
namespace App;
use App\Products_model;
use App\Decorator;
use Response;

class JSONDecorator extends Decorator{
    public function show()
    {
        $products=Products_model::orderBy('created_at','desc')->get();
        return response()->json($products);
    }
}