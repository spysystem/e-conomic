<?php

namespace Economic;

class OrderLine_SetDiscountAsPercent
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     * @param float $value
     */
    public function __construct($orderLineHandle, $value)
    {
      $this->orderLineHandle = $orderLineHandle;
      $this->value = $value;
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
     * @return \Economic\OrderLine_SetDiscountAsPercent
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\OrderLine_SetDiscountAsPercent
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
