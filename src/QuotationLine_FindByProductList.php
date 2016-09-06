<?php

namespace Economic;

class QuotationLine_FindByProductList
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
     * @return \Economic\QuotationLine_FindByProductList
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
