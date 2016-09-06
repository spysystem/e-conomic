<?php

namespace Economic;

class DeliveryLocation_GetPostalCodeResponse
{

    /**
     * @var string $DeliveryLocation_GetPostalCodeResult
     */
    protected $DeliveryLocation_GetPostalCodeResult = null;

    /**
     * @param string $DeliveryLocation_GetPostalCodeResult
     */
    public function __construct($DeliveryLocation_GetPostalCodeResult)
    {
      $this->DeliveryLocation_GetPostalCodeResult = $DeliveryLocation_GetPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getDeliveryLocation_GetPostalCodeResult()
    {
      return $this->DeliveryLocation_GetPostalCodeResult;
    }

    /**
     * @param string $DeliveryLocation_GetPostalCodeResult
     * @return \Economic\DeliveryLocation_GetPostalCodeResponse
     */
    public function setDeliveryLocation_GetPostalCodeResult($DeliveryLocation_GetPostalCodeResult)
    {
      $this->DeliveryLocation_GetPostalCodeResult = $DeliveryLocation_GetPostalCodeResult;
      return $this;
    }

}
