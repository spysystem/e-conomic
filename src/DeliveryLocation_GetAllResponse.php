<?php

namespace Economic;

class DeliveryLocation_GetAllResponse
{

    /**
     * @var ArrayOfDeliveryLocationHandle $DeliveryLocation_GetAllResult
     */
    protected $DeliveryLocation_GetAllResult = null;

    /**
     * @param ArrayOfDeliveryLocationHandle $DeliveryLocation_GetAllResult
     */
    public function __construct($DeliveryLocation_GetAllResult)
    {
      $this->DeliveryLocation_GetAllResult = $DeliveryLocation_GetAllResult;
    }

    /**
     * @return ArrayOfDeliveryLocationHandle
     */
    public function getDeliveryLocation_GetAllResult()
    {
      return $this->DeliveryLocation_GetAllResult;
    }

    /**
     * @param ArrayOfDeliveryLocationHandle $DeliveryLocation_GetAllResult
     * @return \Economic\DeliveryLocation_GetAllResponse
     */
    public function setDeliveryLocation_GetAllResult($DeliveryLocation_GetAllResult)
    {
      $this->DeliveryLocation_GetAllResult = $DeliveryLocation_GetAllResult;
      return $this;
    }

}
