<?php

namespace Economic;

class OrderLine_UpdateFromDataResponse
{

    /**
     * @var OrderLineHandle $OrderLine_UpdateFromDataResult
     */
    protected $OrderLine_UpdateFromDataResult = null;

    /**
     * @param OrderLineHandle $OrderLine_UpdateFromDataResult
     */
    public function __construct($OrderLine_UpdateFromDataResult)
    {
      $this->OrderLine_UpdateFromDataResult = $OrderLine_UpdateFromDataResult;
    }

    /**
     * @return OrderLineHandle
     */
    public function getOrderLine_UpdateFromDataResult()
    {
      return $this->OrderLine_UpdateFromDataResult;
    }

    /**
     * @param OrderLineHandle $OrderLine_UpdateFromDataResult
     * @return \Economic\OrderLine_UpdateFromDataResponse
     */
    public function setOrderLine_UpdateFromDataResult($OrderLine_UpdateFromDataResult)
    {
      $this->OrderLine_UpdateFromDataResult = $OrderLine_UpdateFromDataResult;
      return $this;
    }

}
