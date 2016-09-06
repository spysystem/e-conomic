<?php

namespace Economic;

class Order_GetNetAmountResponse
{

    /**
     * @var float $Order_GetNetAmountResult
     */
    protected $Order_GetNetAmountResult = null;

    /**
     * @param float $Order_GetNetAmountResult
     */
    public function __construct($Order_GetNetAmountResult)
    {
      $this->Order_GetNetAmountResult = $Order_GetNetAmountResult;
    }

    /**
     * @return float
     */
    public function getOrder_GetNetAmountResult()
    {
      return $this->Order_GetNetAmountResult;
    }

    /**
     * @param float $Order_GetNetAmountResult
     * @return \Economic\Order_GetNetAmountResponse
     */
    public function setOrder_GetNetAmountResult($Order_GetNetAmountResult)
    {
      $this->Order_GetNetAmountResult = $Order_GetNetAmountResult;
      return $this;
    }

}
