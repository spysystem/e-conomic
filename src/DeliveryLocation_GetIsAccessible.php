<?php

namespace Economic;

class DeliveryLocation_GetIsAccessible
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
     * @return \Economic\DeliveryLocation_GetIsAccessible
     */
    public function setDeliveryLocationHandle($deliveryLocationHandle)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
      return $this;
    }

}
