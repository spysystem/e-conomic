<?php

namespace Economic;

class DeliveryLocation_GetCityResponse
{

    /**
     * @var string $DeliveryLocation_GetCityResult
     */
    protected $DeliveryLocation_GetCityResult = null;

    /**
     * @param string $DeliveryLocation_GetCityResult
     */
    public function __construct($DeliveryLocation_GetCityResult)
    {
      $this->DeliveryLocation_GetCityResult = $DeliveryLocation_GetCityResult;
    }

    /**
     * @return string
     */
    public function getDeliveryLocation_GetCityResult()
    {
      return $this->DeliveryLocation_GetCityResult;
    }

    /**
     * @param string $DeliveryLocation_GetCityResult
     * @return \Economic\DeliveryLocation_GetCityResponse
     */
    public function setDeliveryLocation_GetCityResult($DeliveryLocation_GetCityResult)
    {
      $this->DeliveryLocation_GetCityResult = $DeliveryLocation_GetCityResult;
      return $this;
    }

}
