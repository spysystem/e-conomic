<?php

namespace Economic;

class OrderLine_GetUnitCostPriceResponse
{

    /**
     * @var float $OrderLine_GetUnitCostPriceResult
     */
    protected $OrderLine_GetUnitCostPriceResult = null;

    /**
     * @param float $OrderLine_GetUnitCostPriceResult
     */
    public function __construct($OrderLine_GetUnitCostPriceResult)
    {
      $this->OrderLine_GetUnitCostPriceResult = $OrderLine_GetUnitCostPriceResult;
    }

    /**
     * @return float
     */
    public function getOrderLine_GetUnitCostPriceResult()
    {
      return $this->OrderLine_GetUnitCostPriceResult;
    }

    /**
     * @param float $OrderLine_GetUnitCostPriceResult
     * @return \Economic\OrderLine_GetUnitCostPriceResponse
     */
    public function setOrderLine_GetUnitCostPriceResult($OrderLine_GetUnitCostPriceResult)
    {
      $this->OrderLine_GetUnitCostPriceResult = $OrderLine_GetUnitCostPriceResult;
      return $this;
    }

}
