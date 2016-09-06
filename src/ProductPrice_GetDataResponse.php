<?php

namespace Economic;

class ProductPrice_GetDataResponse
{

    /**
     * @var ProductPriceData $ProductPrice_GetDataResult
     */
    protected $ProductPrice_GetDataResult = null;

    /**
     * @param ProductPriceData $ProductPrice_GetDataResult
     */
    public function __construct($ProductPrice_GetDataResult)
    {
      $this->ProductPrice_GetDataResult = $ProductPrice_GetDataResult;
    }

    /**
     * @return ProductPriceData
     */
    public function getProductPrice_GetDataResult()
    {
      return $this->ProductPrice_GetDataResult;
    }

    /**
     * @param ProductPriceData $ProductPrice_GetDataResult
     * @return \Economic\ProductPrice_GetDataResponse
     */
    public function setProductPrice_GetDataResult($ProductPrice_GetDataResult)
    {
      $this->ProductPrice_GetDataResult = $ProductPrice_GetDataResult;
      return $this;
    }

}
