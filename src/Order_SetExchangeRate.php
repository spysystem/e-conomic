<?php

namespace Economic;

class Order_SetExchangeRate
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param OrderHandle $orderHandle
     * @param float $value
     */
    public function __construct($orderHandle, $value)
    {
      $this->orderHandle = $orderHandle;
      $this->value = $value;
    }

    /**
     * @return OrderHandle
     */
    public function getOrderHandle()
    {
      return $this->orderHandle;
    }

    /**
     * @param OrderHandle $orderHandle
     * @return \Economic\Order_SetExchangeRate
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
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
     * @return \Economic\Order_SetExchangeRate
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
