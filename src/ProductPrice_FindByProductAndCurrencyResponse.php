<?php

namespace Economic;

class ProductPrice_FindByProductAndCurrencyResponse
{

    /**
     * @var ProductPriceHandle $ProductPrice_FindByProductAndCurrencyResult
     */
    protected $ProductPrice_FindByProductAndCurrencyResult = null;

    /**
     * @param ProductPriceHandle $ProductPrice_FindByProductAndCurrencyResult
     */
    public function __construct($ProductPrice_FindByProductAndCurrencyResult)
    {
      $this->ProductPrice_FindByProductAndCurrencyResult = $ProductPrice_FindByProductAndCurrencyResult;
    }

    /**
     * @return ProductPriceHandle
     */
    public function getProductPrice_FindByProductAndCurrencyResult()
    {
      return $this->ProductPrice_FindByProductAndCurrencyResult;
    }

    /**
     * @param ProductPriceHandle $ProductPrice_FindByProductAndCurrencyResult
     * @return \Economic\ProductPrice_FindByProductAndCurrencyResponse
     */
    public function setProductPrice_FindByProductAndCurrencyResult($ProductPrice_FindByProductAndCurrencyResult)
    {
      $this->ProductPrice_FindByProductAndCurrencyResult = $ProductPrice_FindByProductAndCurrencyResult;
      return $this;
    }

}
