<?php

namespace Economic;

class DeliveryLocation_Delete
{

    /**
     * @var DeliveryLocationHandle $deliveryLocationHandle
     */
    protected $deliveryLocationHandle = null;

    /**
     * @param DeliveryLocationHandle $deliveryLocationHandle
     */
    public function __construct($deliveryLocationHandle)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getDeliveryLocationHandle()
    {
      return $this->deliveryLocationHandle;
    }

    /**
     * @param DeliveryLocationHandle $deliveryLocationHandle
     * @return \Economic\DeliveryLocation_Delete
     */
    public function setDeliveryLocationHandle($deliveryLocationHandle)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
      return $this;
    }

}
