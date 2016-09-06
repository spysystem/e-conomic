<?php

namespace Economic;

class Order_SetDeliveryLocation
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var DeliveryLocationHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderHandle $orderHandle
     * @param DeliveryLocationHandle $valueHandle
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
     * @return \Economic\Order_SetDeliveryLocation
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
      return $this;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DeliveryLocationHandle $valueHandle
     * @return \Economic\Order_SetDeliveryLocation
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
