<?php

namespace Economic;

class OrderLine_SetProduct
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @var ProductHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     * @param ProductHandle $valueHandle
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
     * @return \Economic\OrderLine_SetProduct
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProductHandle $valueHandle
     * @return \Economic\OrderLine_SetProduct
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
