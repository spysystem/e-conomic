<?php

namespace Economic;

class ProductPrice_GetPriceResponse
{

    /**
     * @var float $ProductPrice_GetPriceResult
     */
    protected $ProductPrice_GetPriceResult = null;

    /**
     * @param float $ProductPrice_GetPriceResult
     */
    public function __construct($ProductPrice_GetPriceResult)
    {
      $this->ProductPrice_GetPriceResult = $ProductPrice_GetPriceResult;
    }

    /**
     * @return float
     */
    public function getProductPrice_GetPriceResult()
    {
      return $this->ProductPrice_GetPriceResult;
    }

    /**
     * @param float $ProductPrice_GetPriceResult
     * @return \Economic\ProductPrice_GetPriceResponse
     */
    public function setProductPrice_GetPriceResult($ProductPrice_GetPriceResult)
    {
      $this->ProductPrice_GetPriceResult = $ProductPrice_GetPriceResult;
      return $this;
    }

}
