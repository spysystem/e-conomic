<?php

namespace Economic;

class ProductPrice_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $ProductPrice_GetCurrencyResult
     */
    protected $ProductPrice_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $ProductPrice_GetCurrencyResult
     */
    public function __construct($ProductPrice_GetCurrencyResult)
    {
      $this->ProductPrice_GetCurrencyResult = $ProductPrice_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getProductPrice_GetCurrencyResult()
    {
      return $this->ProductPrice_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $ProductPrice_GetCurrencyResult
     * @return \Economic\ProductPrice_GetCurrencyResponse
     */
    public function setProductPrice_GetCurrencyResult($ProductPrice_GetCurrencyResult)
    {
      $this->ProductPrice_GetCurrencyResult = $ProductPrice_GetCurrencyResult;
      return $this;
    }

}
