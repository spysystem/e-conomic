<?php

namespace Economic;

class DeliveryLocation_GetCity
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
     * @return \Economic\DeliveryLocation_GetCity
     */
    public function setDeliveryLocationHandle($deliveryLocationHandle)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
      return $this;
    }

}
