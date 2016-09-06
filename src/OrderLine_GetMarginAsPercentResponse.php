<?php

namespace Economic;

class OrderLine_GetMarginAsPercentResponse
{

    /**
     * @var float $OrderLine_GetMarginAsPercentResult
     */
    protected $OrderLine_GetMarginAsPercentResult = null;

    /**
     * @param float $OrderLine_GetMarginAsPercentResult
     */
    public function __construct($OrderLine_GetMarginAsPercentResult)
    {
      $this->OrderLine_GetMarginAsPercentResult = $OrderLine_GetMarginAsPercentResult;
    }

    /**
     * @return float
     */
    public function getOrderLine_GetMarginAsPercentResult()
    {
      return $this->OrderLine_GetMarginAsPercentResult;
    }

    /**
     * @param float $OrderLine_GetMarginAsPercentResult
     * @return \Economic\OrderLine_GetMarginAsPercentResponse
     */
    public function setOrderLine_GetMarginAsPercentResult($OrderLine_GetMarginAsPercentResult)
    {
      $this->OrderLine_GetMarginAsPercentResult = $OrderLine_GetMarginAsPercentResult;
      return $this;
    }

}
