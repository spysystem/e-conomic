<?php

namespace Economic;

class OrderLine_CreateFromDataResponse
{

    /**
     * @var OrderLineHandle $OrderLine_CreateFromDataResult
     */
    protected $OrderLine_CreateFromDataResult = null;

    /**
     * @param OrderLineHandle $OrderLine_CreateFromDataResult
     */
    public function __construct($OrderLine_CreateFromDataResult)
    {
      $this->OrderLine_CreateFromDataResult = $OrderLine_CreateFromDataResult;
    }

    /**
     * @return OrderLineHandle
     */
    public function getOrderLine_CreateFromDataResult()
    {
      return $this->OrderLine_CreateFromDataResult;
    }

    /**
     * @param OrderLineHandle $OrderLine_CreateFromDataResult
     * @return \Economic\OrderLine_CreateFromDataResponse
     */
    public function setOrderLine_CreateFromDataResult($OrderLine_CreateFromDataResult)
    {
      $this->OrderLine_CreateFromDataResult = $OrderLine_CreateFromDataResult;
      return $this;
    }

}
