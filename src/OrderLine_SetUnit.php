<?php

namespace Economic;

class OrderLine_SetUnit
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @var UnitHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     * @param UnitHandle $valueHandle
     */
    public function __construct($orderLineHandle, $valueHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\OrderLine_SetUnit
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param UnitHandle $valueHandle
     * @return \Economic\OrderLine_SetUnit
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
