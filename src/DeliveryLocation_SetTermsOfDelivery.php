<?php

namespace Economic;

class DeliveryLocation_SetTermsOfDelivery
{

    /**
     * @var DeliveryLocationHandle $deliveryLocationHandle
     */
    protected $deliveryLocationHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param DeliveryLocationHandle $deliveryLocationHandle
     * @param string $value
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
     * @return \Economic\DeliveryLocation_SetTermsOfDelivery
     */
    public function setDeliveryLocationHandle($deliveryLocationHandle)
    {
      $this->deliveryLocationHandle = $deliveryLocationHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\DeliveryLocation_SetTermsOfDelivery
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
