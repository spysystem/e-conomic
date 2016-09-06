<?php

namespace Economic;

class ProductPrice_FindByProductListAndCurrencyResponse
{

    /**
     * @var ArrayOfProductPriceHandle $ProductPrice_FindByProductListAndCurrencyResult
     */
    protected $ProductPrice_FindByProductListAndCurrencyResult = null;

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_FindByProductListAndCurrencyResult
     */
    public function __construct($ProductPrice_FindByProductListAndCurrencyResult)
    {
      $this->ProductPrice_FindByProductListAndCurrencyResult = $ProductPrice_FindByProductListAndCurrencyResult;
    }

    /**
     * @return ArrayOfProductPriceHandle
     */
    public function getProductPrice_FindByProductListAndCurrencyResult()
    {
      return $this->ProductPrice_FindByProductListAndCurrencyResult;
    }

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_FindByProductListAndCurrencyResult
     * @return \Economic\ProductPrice_FindByProductListAndCurrencyResponse
     */
    public function setProductPrice_FindByProductListAndCurrencyResult($ProductPrice_FindByProductListAndCurrencyResult)
    {
      $this->ProductPrice_FindByProductListAndCurrencyResult = $ProductPrice_FindByProductListAndCurrencyResult;
      return $this;
    }

}
