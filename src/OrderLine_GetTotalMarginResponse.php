<?php

namespace Economic;

class OrderLine_GetTotalMarginResponse
{

    /**
     * @var float $OrderLine_GetTotalMarginResult
     */
    protected $OrderLine_GetTotalMarginResult = null;

    /**
     * @param float $OrderLine_GetTotalMarginResult
     */
    public function __construct($OrderLine_GetTotalMarginResult)
    {
      $this->OrderLine_GetTotalMarginResult = $OrderLine_GetTotalMarginResult;
    }

    /**
     * @return float
     */
    public function getOrderLine_GetTotalMarginResult()
    {
      return $this->OrderLine_GetTotalMarginResult;
    }

    /**
     * @param float $OrderLine_GetTotalMarginResult
     * @return \Economic\OrderLine_GetTotalMarginResponse
     */
    public function setOrderLine_GetTotalMarginResult($OrderLine_GetTotalMarginResult)
    {
      $this->OrderLine_GetTotalMarginResult = $OrderLine_GetTotalMarginResult;
      return $this;
    }

}
