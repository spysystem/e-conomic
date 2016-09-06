<?php

namespace Economic;

class Order_SetDebtor
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var DebtorHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderHandle $orderHandle
     * @param DebtorHandle $valueHandle
     */
    public function __construct($orderHandle, $valueHandle)
    {
      $this->orderHandle = $orderHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Order_SetDebtor
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DebtorHandle $valueHandle
     * @return \Economic\Order_SetDebtor
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
