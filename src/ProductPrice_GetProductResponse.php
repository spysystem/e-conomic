<?php

namespace Economic;

class ProductPrice_GetProductResponse
{

    /**
     * @var ProductHandle $ProductPrice_GetProductResult
     */
    protected $ProductPrice_GetProductResult = null;

    /**
     * @param ProductHandle $ProductPrice_GetProductResult
     */
    public function __construct($ProductPrice_GetProductResult)
    {
      $this->ProductPrice_GetProductResult = $ProductPrice_GetProductResult;
    }

    /**
     * @return ProductHandle
     */
    public function getProductPrice_GetProductResult()
    {
      return $this->ProductPrice_GetProductResult;
    }

    /**
     * @param ProductHandle $ProductPrice_GetProductResult
     * @return \Economic\ProductPrice_GetProductResponse
     */
    public function setProductPrice_GetProductResult($ProductPrice_GetProductResult)
    {
      $this->ProductPrice_GetProductResult = $ProductPrice_GetProductResult;
      return $this;
    }

}
