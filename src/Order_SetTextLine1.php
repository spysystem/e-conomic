<?php

namespace Economic;

class Order_SetTextLine1
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param OrderHandle $orderHandle
     * @param string $value
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
     * @return \Economic\Order_SetTextLine1
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
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
     * @return \Economic\Order_SetTextLine1
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
