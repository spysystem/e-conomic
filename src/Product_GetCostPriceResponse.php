<?php

namespace Economic;

class Product_GetCostPriceResponse
{

    /**
     * @var float $Product_GetCostPriceResult
     */
    protected $Product_GetCostPriceResult = null;

    /**
     * @param float $Product_GetCostPriceResult
     */
    public function __construct($Product_GetCostPriceResult)
    {
      $this->Product_GetCostPriceResult = $Product_GetCostPriceResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetCostPriceResult()
    {
      return $this->Product_GetCostPriceResult;
    }

    /**
     * @param float $Product_GetCostPriceResult
     * @return \Economic\Product_GetCostPriceResponse
     */
    public function setProduct_GetCostPriceResult($Product_GetCostPriceResult)
    {
      $this->Product_GetCostPriceResult = $Product_GetCostPriceResult;
      return $this;
    }

}
