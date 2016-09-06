<?php

namespace Economic;

class Product_GetOnOrderResponse
{

    /**
     * @var float $Product_GetOnOrderResult
     */
    protected $Product_GetOnOrderResult = null;

    /**
     * @param float $Product_GetOnOrderResult
     */
    public function __construct($Product_GetOnOrderResult)
    {
      $this->Product_GetOnOrderResult = $Product_GetOnOrderResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetOnOrderResult()
    {
      return $this->Product_GetOnOrderResult;
    }

    /**
     * @param float $Product_GetOnOrderResult
     * @return \Economic\Product_GetOnOrderResponse
     */
    public function setProduct_GetOnOrderResult($Product_GetOnOrderResult)
    {
      $this->Product_GetOnOrderResult = $Product_GetOnOrderResult;
      return $this;
    }

}
