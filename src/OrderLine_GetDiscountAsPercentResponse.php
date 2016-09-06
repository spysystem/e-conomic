<?php

namespace Economic;

class OrderLine_GetDiscountAsPercentResponse
{

    /**
     * @var float $OrderLine_GetDiscountAsPercentResult
     */
    protected $OrderLine_GetDiscountAsPercentResult = null;

    /**
     * @param float $OrderLine_GetDiscountAsPercentResult
     */
    public function __construct($OrderLine_GetDiscountAsPercentResult)
    {
      $this->OrderLine_GetDiscountAsPercentResult = $OrderLine_GetDiscountAsPercentResult;
    }

    /**
     * @return float
     */
    public function getOrderLine_GetDiscountAsPercentResult()
    {
      return $this->OrderLine_GetDiscountAsPercentResult;
    }

    /**
     * @param float $OrderLine_GetDiscountAsPercentResult
     * @return \Economic\OrderLine_GetDiscountAsPercentResponse
     */
    public function setOrderLine_GetDiscountAsPercentResult($OrderLine_GetDiscountAsPercentResult)
    {
      $this->OrderLine_GetDiscountAsPercentResult = $OrderLine_GetDiscountAsPercentResult;
      return $this;
    }

}
