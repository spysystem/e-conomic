<?php

namespace Economic;

class OrderLine_GetTotalNetAmountResponse
{

    /**
     * @var float $OrderLine_GetTotalNetAmountResult
     */
    protected $OrderLine_GetTotalNetAmountResult = null;

    /**
     * @param float $OrderLine_GetTotalNetAmountResult
     */
    public function __construct($OrderLine_GetTotalNetAmountResult)
    {
      $this->OrderLine_GetTotalNetAmountResult = $OrderLine_GetTotalNetAmountResult;
    }

    /**
     * @return float
     */
    public function getOrderLine_GetTotalNetAmountResult()
    {
      return $this->OrderLine_GetTotalNetAmountResult;
    }

    /**
     * @param float $OrderLine_GetTotalNetAmountResult
     * @return \Economic\OrderLine_GetTotalNetAmountResponse
     */
    public function setOrderLine_GetTotalNetAmountResult($OrderLine_GetTotalNetAmountResult)
    {
      $this->OrderLine_GetTotalNetAmountResult = $OrderLine_GetTotalNetAmountResult;
      return $this;
    }

}
