<?php

namespace Economic;

class ProductPrice_CreateFromDataResponse
{

    /**
     * @var ProductPriceHandle $ProductPrice_CreateFromDataResult
     */
    protected $ProductPrice_CreateFromDataResult = null;

    /**
     * @param ProductPriceHandle $ProductPrice_CreateFromDataResult
     */
    public function __construct($ProductPrice_CreateFromDataResult)
    {
      $this->ProductPrice_CreateFromDataResult = $ProductPrice_CreateFromDataResult;
    }

    /**
     * @return ProductPriceHandle
     */
    public function getProductPrice_CreateFromDataResult()
    {
      return $this->ProductPrice_CreateFromDataResult;
    }

    /**
     * @param ProductPriceHandle $ProductPrice_CreateFromDataResult
     * @return \Economic\ProductPrice_CreateFromDataResponse
     */
    public function setProductPrice_CreateFromDataResult($ProductPrice_CreateFromDataResult)
    {
      $this->ProductPrice_CreateFromDataResult = $ProductPrice_CreateFromDataResult;
      return $this;
    }

}
