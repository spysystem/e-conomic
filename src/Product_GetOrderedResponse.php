<?php

namespace Economic;

class Product_GetOrderedResponse
{

    /**
     * @var float $Product_GetOrderedResult
     */
    protected $Product_GetOrderedResult = null;

    /**
     * @param float $Product_GetOrderedResult
     */
    public function __construct($Product_GetOrderedResult)
    {
      $this->Product_GetOrderedResult = $Product_GetOrderedResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetOrderedResult()
    {
      return $this->Product_GetOrderedResult;
    }

    /**
     * @param float $Product_GetOrderedResult
     * @return \Economic\Product_GetOrderedResponse
     */
    public function setProduct_GetOrderedResult($Product_GetOrderedResult)
    {
      $this->Product_GetOrderedResult = $Product_GetOrderedResult;
      return $this;
    }

}
