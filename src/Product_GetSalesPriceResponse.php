<?php

namespace Economic;

class Product_GetSalesPriceResponse
{

    /**
     * @var float $Product_GetSalesPriceResult
     */
    protected $Product_GetSalesPriceResult = null;

    /**
     * @param float $Product_GetSalesPriceResult
     */
    public function __construct($Product_GetSalesPriceResult)
    {
      $this->Product_GetSalesPriceResult = $Product_GetSalesPriceResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetSalesPriceResult()
    {
      return $this->Product_GetSalesPriceResult;
    }

    /**
     * @param float $Product_GetSalesPriceResult
     * @return \Economic\Product_GetSalesPriceResponse
     */
    public function setProduct_GetSalesPriceResult($Product_GetSalesPriceResult)
    {
      $this->Product_GetSalesPriceResult = $Product_GetSalesPriceResult;
      return $this;
    }

}
