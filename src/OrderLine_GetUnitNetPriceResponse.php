<?php

namespace Economic;

class OrderLine_GetUnitNetPriceResponse
{

    /**
     * @var float $OrderLine_GetUnitNetPriceResult
     */
    protected $OrderLine_GetUnitNetPriceResult = null;

    /**
     * @param float $OrderLine_GetUnitNetPriceResult
     */
    public function __construct($OrderLine_GetUnitNetPriceResult)
    {
      $this->OrderLine_GetUnitNetPriceResult = $OrderLine_GetUnitNetPriceResult;
    }

    /**
     * @return float
     */
    public function getOrderLine_GetUnitNetPriceResult()
    {
      return $this->OrderLine_GetUnitNetPriceResult;
    }

    /**
     * @param float $OrderLine_GetUnitNetPriceResult
     * @return \Economic\OrderLine_GetUnitNetPriceResponse
     */
    public function setOrderLine_GetUnitNetPriceResult($OrderLine_GetUnitNetPriceResult)
    {
      $this->OrderLine_GetUnitNetPriceResult = $OrderLine_GetUnitNetPriceResult;
      return $this;
    }

}
