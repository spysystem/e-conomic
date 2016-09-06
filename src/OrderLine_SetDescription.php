<?php

namespace Economic;

class OrderLine_SetDescription
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     * @param string $value
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
     * @return \Economic\OrderLine_SetDescription
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\OrderLine_SetDescription
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
