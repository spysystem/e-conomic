<?php

namespace Economic;

class OrderLine_GetUnitResponse
{

    /**
     * @var UnitHandle $OrderLine_GetUnitResult
     */
    protected $OrderLine_GetUnitResult = null;

    /**
     * @param UnitHandle $OrderLine_GetUnitResult
     */
    public function __construct($OrderLine_GetUnitResult)
    {
      $this->OrderLine_GetUnitResult = $OrderLine_GetUnitResult;
    }

    /**
     * @return UnitHandle
     */
    public function getOrderLine_GetUnitResult()
    {
      return $this->OrderLine_GetUnitResult;
    }

    /**
     * @param UnitHandle $OrderLine_GetUnitResult
     * @return \Economic\OrderLine_GetUnitResponse
     */
    public function setOrderLine_GetUnitResult($OrderLine_GetUnitResult)
    {
      $this->OrderLine_GetUnitResult = $OrderLine_GetUnitResult;
      return $this;
    }

}
