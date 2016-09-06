<?php

namespace Economic;

class ProductPrice_FindByProductList
{

    /**
     * @var ArrayOfProductHandle $productHandles
     */
    protected $productHandles = null;

    /**
     * @param ArrayOfProductHandle $productHandles
     */
    public function __construct($productHandles)
    {
      $this->productHandles = $productHandles;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProductHandles()
    {
      return $this->productHandles;
    }

    /**
     * @param ArrayOfProductHandle $productHandles
     * @return \Economic\ProductPrice_FindByProductList
     */
    public function setProductHandles($productHandles)
    {
      $this->productHandles = $productHandles;
      return $this;
    }

}
