<?php

namespace Economic;

class Product_GetAvailableResponse
{

    /**
     * @var float $Product_GetAvailableResult
     */
    protected $Product_GetAvailableResult = null;

    /**
     * @param float $Product_GetAvailableResult
     */
    public function __construct($Product_GetAvailableResult)
    {
      $this->Product_GetAvailableResult = $Product_GetAvailableResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetAvailableResult()
    {
      return $this->Product_GetAvailableResult;
    }

    /**
     * @param float $Product_GetAvailableResult
     * @return \Economic\Product_GetAvailableResponse
     */
    public function setProduct_GetAvailableResult($Product_GetAvailableResult)
    {
      $this->Product_GetAvailableResult = $Product_GetAvailableResult;
      return $this;
    }

}
