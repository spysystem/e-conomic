<?php

namespace Economic;

class DeliveryLocation_SetIsAccessible
{

    /**
     * @var DeliveryLocationHandle $deliveryLocationHandle
     */
    protected $deliveryLocationHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param DeliveryLocationHandle $deliveryLocationHandle
     * @param boolean $value
     */
    public function __construct($deliveryLocationHandle, $value)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
      $this->value = $value;
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
     * @return \Economic\DeliveryLocation_SetIsAccessible
     */
    public function setDeliveryLocationHandle($deliveryLocationHandle)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
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
     * @return \Economic\DeliveryLocation_SetIsAccessible
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
