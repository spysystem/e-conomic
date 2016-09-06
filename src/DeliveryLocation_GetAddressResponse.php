<?php

namespace Economic;

class DeliveryLocation_GetAddressResponse
{

    /**
     * @var string $DeliveryLocation_GetAddressResult
     */
    protected $DeliveryLocation_GetAddressResult = null;

    /**
     * @param string $DeliveryLocation_GetAddressResult
     */
    public function __construct($DeliveryLocation_GetAddressResult)
    {
      $this->DeliveryLocation_GetAddressResult = $DeliveryLocation_GetAddressResult;
    }

    /**
     * @return string
     */
    public function getDeliveryLocation_GetAddressResult()
    {
      return $this->DeliveryLocation_GetAddressResult;
    }

    /**
     * @param string $DeliveryLocation_GetAddressResult
     * @return \Economic\DeliveryLocation_GetAddressResponse
     */
    public function setDeliveryLocation_GetAddressResult($DeliveryLocation_GetAddressResult)
    {
      $this->DeliveryLocation_GetAddressResult = $DeliveryLocation_GetAddressResult;
      return $this;
    }

}
