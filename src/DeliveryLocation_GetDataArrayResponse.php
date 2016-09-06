<?php

namespace Economic;

class DeliveryLocation_GetDataArrayResponse
{

    /**
     * @var ArrayOfDeliveryLocationData $DeliveryLocation_GetDataArrayResult
     */
    protected $DeliveryLocation_GetDataArrayResult = null;

    /**
     * @param ArrayOfDeliveryLocationData $DeliveryLocation_GetDataArrayResult
     */
    public function __construct($DeliveryLocation_GetDataArrayResult)
    {
      $this->DeliveryLocation_GetDataArrayResult = $DeliveryLocation_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDeliveryLocationData
     */
    public function getDeliveryLocation_GetDataArrayResult()
    {
      return $this->DeliveryLocation_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDeliveryLocationData $DeliveryLocation_GetDataArrayResult
     * @return \Economic\DeliveryLocation_GetDataArrayResponse
     */
    public function setDeliveryLocation_GetDataArrayResult($DeliveryLocation_GetDataArrayResult)
    {
      $this->DeliveryLocation_GetDataArrayResult = $DeliveryLocation_GetDataArrayResult;
      return $this;
    }

}
