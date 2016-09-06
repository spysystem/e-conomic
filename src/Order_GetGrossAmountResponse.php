<?php

namespace Economic;

class Order_GetGrossAmountResponse
{

    /**
     * @var float $Order_GetGrossAmountResult
     */
    protected $Order_GetGrossAmountResult = null;

    /**
     * @param float $Order_GetGrossAmountResult
     */
    public function __construct($Order_GetGrossAmountResult)
    {
      $this->Order_GetGrossAmountResult = $Order_GetGrossAmountResult;
    }

    /**
     * @return float
     */
    public function getOrder_GetGrossAmountResult()
    {
      return $this->Order_GetGrossAmountResult;
    }

    /**
     * @param float $Order_GetGrossAmountResult
     * @return \Economic\Order_GetGrossAmountResponse
     */
    public function setOrder_GetGrossAmountResult($Order_GetGrossAmountResult)
    {
      $this->Order_GetGrossAmountResult = $Order_GetGrossAmountResult;
      return $this;
    }

}
