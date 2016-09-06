<?php

namespace Economic;

class OrderLine_GetQuantityResponse
{

    /**
     * @var float $OrderLine_GetQuantityResult
     */
    protected $OrderLine_GetQuantityResult = null;

    /**
     * @param float $OrderLine_GetQuantityResult
     */
    public function __construct($OrderLine_GetQuantityResult)
    {
      $this->OrderLine_GetQuantityResult = $OrderLine_GetQuantityResult;
    }

    /**
     * @return float
     */
    public function getOrderLine_GetQuantityResult()
    {
      return $this->OrderLine_GetQuantityResult;
    }

    /**
     * @param float $OrderLine_GetQuantityResult
     * @return \Economic\OrderLine_GetQuantityResponse
     */
    public function setOrderLine_GetQuantityResult($OrderLine_GetQuantityResult)
    {
      $this->OrderLine_GetQuantityResult = $OrderLine_GetQuantityResult;
      return $this;
    }

}
