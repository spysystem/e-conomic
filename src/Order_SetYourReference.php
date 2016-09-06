<?php

namespace Economic;

class Order_SetYourReference
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var DebtorContactHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderHandle $orderHandle
     * @param DebtorContactHandle $valueHandle
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
     * @return \Economic\Order_SetYourReference
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
      return $this;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DebtorContactHandle $valueHandle
     * @return \Economic\Order_SetYourReference
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
