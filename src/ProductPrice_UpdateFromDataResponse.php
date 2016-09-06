<?php

namespace Economic;

class ProductPrice_UpdateFromDataResponse
{

    /**
     * @var ProductPriceHandle $ProductPrice_UpdateFromDataResult
     */
    protected $ProductPrice_UpdateFromDataResult = null;

    /**
     * @param ProductPriceHandle $ProductPrice_UpdateFromDataResult
     */
    public function __construct($ProductPrice_UpdateFromDataResult)
    {
      $this->ProductPrice_UpdateFromDataResult = $ProductPrice_UpdateFromDataResult;
    }

    /**
     * @return ProductPriceHandle
     */
    public function getProductPrice_UpdateFromDataResult()
    {
      return $this->ProductPrice_UpdateFromDataResult;
    }

    /**
     * @param ProductPriceHandle $ProductPrice_UpdateFromDataResult
     * @return \Economic\ProductPrice_UpdateFromDataResponse
     */
    public function setProductPrice_UpdateFromDataResult($ProductPrice_UpdateFromDataResult)
    {
      $this->ProductPrice_UpdateFromDataResult = $ProductPrice_UpdateFromDataResult;
      return $this;
    }

}
