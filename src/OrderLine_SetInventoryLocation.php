<?php

namespace Economic;

class OrderLine_SetInventoryLocation
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @var InventoryLocationHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     * @param InventoryLocationHandle $valueHandle
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
     * @return \Economic\OrderLine_SetInventoryLocation
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      return $this;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param InventoryLocationHandle $valueHandle
     * @return \Economic\OrderLine_SetInventoryLocation
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
