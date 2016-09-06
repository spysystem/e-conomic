<?php

namespace Economic;

class ProductPrice_FindByCurrencyResponse
{

    /**
     * @var ArrayOfProductPriceHandle $ProductPrice_FindByCurrencyResult
     */
    protected $ProductPrice_FindByCurrencyResult = null;

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_FindByCurrencyResult
     */
    public function __construct($ProductPrice_FindByCurrencyResult)
    {
      $this->ProductPrice_FindByCurrencyResult = $ProductPrice_FindByCurrencyResult;
    }

    /**
     * @return ArrayOfProductPriceHandle
     */
    public function getProductPrice_FindByCurrencyResult()
    {
      return $this->ProductPrice_FindByCurrencyResult;
    }

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_FindByCurrencyResult
     * @return \Economic\ProductPrice_FindByCurrencyResponse
     */
    public function setProductPrice_FindByCurrencyResult($ProductPrice_FindByCurrencyResult)
    {
      $this->ProductPrice_FindByCurrencyResult = $ProductPrice_FindByCurrencyResult;
      return $this;
    }

}
