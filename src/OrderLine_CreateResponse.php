<?php

namespace Economic;

class OrderLine_CreateResponse
{

    /**
     * @var OrderLineHandle $OrderLine_CreateResult
     */
    protected $OrderLine_CreateResult = null;

    /**
     * @param OrderLineHandle $OrderLine_CreateResult
     */
    public function __construct($OrderLine_CreateResult)
    {
      $this->OrderLine_CreateResult = $OrderLine_CreateResult;
    }

    /**
     * @return OrderLineHandle
     */
    public function getOrderLine_CreateResult()
    {
      return $this->OrderLine_CreateResult;
    }

    /**
     * @param OrderLineHandle $OrderLine_CreateResult
     * @return \Economic\OrderLine_CreateResponse
     */
    public function setOrderLine_CreateResult($OrderLine_CreateResult)
    {
      $this->OrderLine_CreateResult = $OrderLine_CreateResult;
      return $this;
    }

}
