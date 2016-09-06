<?php

namespace Economic;

class DeliveryLocation_GetDataResponse
{

    /**
     * @var DeliveryLocationData $DeliveryLocation_GetDataResult
     */
    protected $DeliveryLocation_GetDataResult = null;

    /**
     * @param DeliveryLocationData $DeliveryLocation_GetDataResult
     */
    public function __construct($DeliveryLocation_GetDataResult)
    {
      $this->DeliveryLocation_GetDataResult = $DeliveryLocation_GetDataResult;
    }

    /**
     * @return DeliveryLocationData
     */
    public function getDeliveryLocation_GetDataResult()
    {
      return $this->DeliveryLocation_GetDataResult;
    }

    /**
     * @param DeliveryLocationData $DeliveryLocation_GetDataResult
     * @return \Economic\DeliveryLocation_GetDataResponse
     */
    public function setDeliveryLocation_GetDataResult($DeliveryLocation_GetDataResult)
    {
      $this->DeliveryLocation_GetDataResult = $DeliveryLocation_GetDataResult;
      return $this;
    }

}
