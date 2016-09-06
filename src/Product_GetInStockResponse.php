<?php

namespace Economic;

class Product_GetInStockResponse
{

    /**
     * @var float $Product_GetInStockResult
     */
    protected $Product_GetInStockResult = null;

    /**
     * @param float $Product_GetInStockResult
     */
    public function __construct($Product_GetInStockResult)
    {
      $this->Product_GetInStockResult = $Product_GetInStockResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetInStockResult()
    {
      return $this->Product_GetInStockResult;
    }

    /**
     * @param float $Product_GetInStockResult
     * @return \Economic\Product_GetInStockResponse
     */
    public function setProduct_GetInStockResult($Product_GetInStockResult)
    {
      $this->Product_GetInStockResult = $Product_GetInStockResult;
      return $this;
    }

}
