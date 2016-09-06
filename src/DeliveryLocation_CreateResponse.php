<?php

namespace Economic;

class DeliveryLocation_CreateResponse
{

    /**
     * @var DeliveryLocationHandle $DeliveryLocation_CreateResult
     */
    protected $DeliveryLocation_CreateResult = null;

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_CreateResult
     */
    public function __construct($DeliveryLocation_CreateResult)
    {
      $this->DeliveryLocation_CreateResult = $DeliveryLocation_CreateResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getDeliveryLocation_CreateResult()
    {
      return $this->DeliveryLocation_CreateResult;
    }

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_CreateResult
     * @return \Economic\DeliveryLocation_CreateResponse
     */
    public function setDeliveryLocation_CreateResult($DeliveryLocation_CreateResult)
    {
      $this->DeliveryLocation_CreateResult = $DeliveryLocation_CreateResult;
      return $this;
    }

}
