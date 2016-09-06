<?php

namespace Economic;

class DeliveryLocation_GetDebtor
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
     * @return \Economic\DeliveryLocation_GetDebtor
     */
    public function setDeliveryLocationHandle($deliveryLocationHandle)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
      return $this;
    }

}
