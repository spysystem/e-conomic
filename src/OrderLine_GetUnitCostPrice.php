<?php

namespace Economic;

class OrderLine_GetUnitCostPrice
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     */
    public function __construct($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
    }

    /**
     * @return OrderLineHandle
     */
    public function getOrderLineHandle()
    {
      return $this->orderLineHandle;
    }

    /**
     * @param OrderLineHandle $orderLineHandle
     * @return \Economic\OrderLine_GetUnitCostPrice
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      return $this;
    }

}
