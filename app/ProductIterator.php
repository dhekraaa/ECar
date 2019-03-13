<?php

// BookIterator.php

namespace App;

class ProductIterator implements \Iterator
{
    private $i_position = 0;
    private $productsCollection;

    public function __construct(ProductsCollection $productsCollection)
    {
        $this->productsCollection =$productsCollection;
    }

    public function current()
    {
        return $this->productsCollection->getProduct($this->i_position);
    }

    public function key()
    {
        return $this->i_position;
    }

    public function next()
    {
        $this->i_position++;
    }

    public function rewind()
    {
        $this->i_position = 0;
    }

    public function valid()
    {
        return !is_null($this->productsCollection->getProduct($this->i_position));
    }
}