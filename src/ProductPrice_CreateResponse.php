<?php

namespace Economic;

class ProductPrice_CreateResponse
{

    /**
     * @var ProductPriceHandle $ProductPrice_CreateResult
     */
    protected $ProductPrice_CreateResult = null;

    /**
     * @param ProductPriceHandle $ProductPrice_CreateResult
     */
    public function __construct($ProductPrice_CreateResult)
    {
      $this->ProductPrice_CreateResult = $ProductPrice_CreateResult;
    }

    /**
     * @return ProductPriceHandle
     */
    public function getProductPrice_CreateResult()
    {
      return $this->ProductPrice_CreateResult;
    }

    /**
     * @param ProductPriceHandle $ProductPrice_CreateResult
     * @return \Economic\ProductPrice_CreateResponse
     */
    public function setProductPrice_CreateResult($ProductPrice_CreateResult)
    {
      $this->ProductPrice_CreateResult = $ProductPrice_CreateResult;
      return $this;
    }

}
