<?php

namespace Economic;

class OrderLine_GetOrderResponse
{

    /**
     * @var OrderHandle $OrderLine_GetOrderResult
     */
    protected $OrderLine_GetOrderResult = null;

    /**
     * @param OrderHandle $OrderLine_GetOrderResult
     */
    public function __construct($OrderLine_GetOrderResult)
    {
      $this->OrderLine_GetOrderResult = $OrderLine_GetOrderResult;
    }

    /**
     * @return OrderHandle
     */
    public function getOrderLine_GetOrderResult()
    {
      return $this->OrderLine_GetOrderResult;
    }

    /**
     * @param OrderHandle $OrderLine_GetOrderResult
     * @return \Economic\OrderLine_GetOrderResponse
     */
    public function setOrderLine_GetOrderResult($OrderLine_GetOrderResult)
    {
      $this->OrderLine_GetOrderResult = $OrderLine_GetOrderResult;
      return $this;
    }

}
