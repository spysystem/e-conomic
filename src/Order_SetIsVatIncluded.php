<?php

namespace Economic;

class Order_SetIsVatIncluded
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param OrderHandle $orderHandle
     * @param boolean $value
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
     * @return \Economic\Order_SetIsVatIncluded
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\Order_SetIsVatIncluded
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
