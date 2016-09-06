<?php

namespace Economic;

class DeliveryLocation_UpdateFromDataResponse
{

    /**
     * @var DeliveryLocationHandle $DeliveryLocation_UpdateFromDataResult
     */
    protected $DeliveryLocation_UpdateFromDataResult = null;

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_UpdateFromDataResult
     */
    public function __construct($DeliveryLocation_UpdateFromDataResult)
    {
      $this->DeliveryLocation_UpdateFromDataResult = $DeliveryLocation_UpdateFromDataResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getDeliveryLocation_UpdateFromDataResult()
    {
      return $this->DeliveryLocation_UpdateFromDataResult;
    }

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_UpdateFromDataResult
     * @return \Economic\DeliveryLocation_UpdateFromDataResponse
     */
    public function setDeliveryLocation_UpdateFromDataResult($DeliveryLocation_UpdateFromDataResult)
    {
      $this->DeliveryLocation_UpdateFromDataResult = $DeliveryLocation_UpdateFromDataResult;
      return $this;
    }

}
