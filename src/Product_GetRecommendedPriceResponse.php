<?php

namespace Economic;

class Product_GetRecommendedPriceResponse
{

    /**
     * @var float $Product_GetRecommendedPriceResult
     */
    protected $Product_GetRecommendedPriceResult = null;

    /**
     * @param float $Product_GetRecommendedPriceResult
     */
    public function __construct($Product_GetRecommendedPriceResult)
    {
      $this->Product_GetRecommendedPriceResult = $Product_GetRecommendedPriceResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetRecommendedPriceResult()
    {
      return $this->Product_GetRecommendedPriceResult;
    }

    /**
     * @param float $Product_GetRecommendedPriceResult
     * @return \Economic\Product_GetRecommendedPriceResponse
     */
    public function setProduct_GetRecommendedPriceResult($Product_GetRecommendedPriceResult)
    {
      $this->Product_GetRecommendedPriceResult = $Product_GetRecommendedPriceResult;
      return $this;
    }

}
