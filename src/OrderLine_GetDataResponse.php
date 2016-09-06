<?php

namespace Economic;

class OrderLine_GetDataResponse
{

    /**
     * @var OrderLineData $OrderLine_GetDataResult
     */
    protected $OrderLine_GetDataResult = null;

    /**
     * @param OrderLineData $OrderLine_GetDataResult
     */
    public function __construct($OrderLine_GetDataResult)
    {
      $this->OrderLine_GetDataResult = $OrderLine_GetDataResult;
    }

    /**
     * @return OrderLineData
     */
    public function getOrderLine_GetDataResult()
    {
      return $this->OrderLine_GetDataResult;
    }

    /**
     * @param OrderLineData $OrderLine_GetDataResult
     * @return \Economic\OrderLine_GetDataResponse
     */
    public function setOrderLine_GetDataResult($OrderLine_GetDataResult)
    {
      $this->OrderLine_GetDataResult = $OrderLine_GetDataResult;
      return $this;
    }

}
