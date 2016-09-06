<?php

namespace Economic;

class Order_GetVatAmount
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @param OrderHandle $orderHandle
     */
    public function __construct($orderHandle)
    {
      $this->orderHandle = $orderHandle;
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
     * @return \Economic\Order_GetVatAmount
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
      return $this;
    }

}
