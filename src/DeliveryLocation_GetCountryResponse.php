<?php

namespace Economic;

class DeliveryLocation_GetCountryResponse
{

    /**
     * @var string $DeliveryLocation_GetCountryResult
     */
    protected $DeliveryLocation_GetCountryResult = null;

    /**
     * @param string $DeliveryLocation_GetCountryResult
     */
    public function __construct($DeliveryLocation_GetCountryResult)
    {
      $this->DeliveryLocation_GetCountryResult = $DeliveryLocation_GetCountryResult;
    }

    /**
     * @return string
     */
    public function getDeliveryLocation_GetCountryResult()
    {
      return $this->DeliveryLocation_GetCountryResult;
    }

    /**
     * @param string $DeliveryLocation_GetCountryResult
     * @return \Economic\DeliveryLocation_GetCountryResponse
     */
    public function setDeliveryLocation_GetCountryResult($DeliveryLocation_GetCountryResult)
    {
      $this->DeliveryLocation_GetCountryResult = $DeliveryLocation_GetCountryResult;
      return $this;
    }

}
