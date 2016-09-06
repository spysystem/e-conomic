<?php

namespace Economic;

class InvoiceLine_FindByProductList
{

    /**
     * @var ArrayOfProductHandle $products
     */
    protected $products = null;

    /**
     * @param ArrayOfProductHandle $products
     */
    public function __construct($products)
    {
      $this->products = $products;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfProductHandle $products
     * @return \Economic\InvoiceLine_FindByProductList
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
