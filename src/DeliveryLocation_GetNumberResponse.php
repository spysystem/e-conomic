<?php

namespace Economic;

class DeliveryLocation_GetNumberResponse
{

    /**
     * @var int $DeliveryLocation_GetNumberResult
     */
    protected $DeliveryLocation_GetNumberResult = null;

    /**
     * @param int $DeliveryLocation_GetNumberResult
     */
    public function __construct($DeliveryLocation_GetNumberResult)
    {
      $this->DeliveryLocation_GetNumberResult = $DeliveryLocation_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getDeliveryLocation_GetNumberResult()
    {
      return $this->DeliveryLocation_GetNumberResult;
    }

    /**
     * @param int $DeliveryLocation_GetNumberResult
     * @return \Economic\DeliveryLocation_GetNumberResponse
     */
    public function setDeliveryLocation_GetNumberResult($DeliveryLocation_GetNumberResult)
    {
      $this->DeliveryLocation_GetNumberResult = $DeliveryLocation_GetNumberResult;
      return $this;
    }

}
