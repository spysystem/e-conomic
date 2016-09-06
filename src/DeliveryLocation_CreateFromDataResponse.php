<?php

namespace Economic;

class DeliveryLocation_CreateFromDataResponse
{

    /**
     * @var DeliveryLocationHandle $DeliveryLocation_CreateFromDataResult
     */
    protected $DeliveryLocation_CreateFromDataResult = null;

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_CreateFromDataResult
     */
    public function __construct($DeliveryLocation_CreateFromDataResult)
    {
      $this->DeliveryLocation_CreateFromDataResult = $DeliveryLocation_CreateFromDataResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getDeliveryLocation_CreateFromDataResult()
    {
      return $this->DeliveryLocation_CreateFromDataResult;
    }

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_CreateFromDataResult
     * @return \Economic\DeliveryLocation_CreateFromDataResponse
     */
    public function setDeliveryLocation_CreateFromDataResult($DeliveryLocation_CreateFromDataResult)
    {
      $this->DeliveryLocation_CreateFromDataResult = $DeliveryLocation_CreateFromDataResult;
      return $this;
    }

}
