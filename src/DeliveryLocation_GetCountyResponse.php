<?php

namespace Economic;

class DeliveryLocation_GetCountyResponse
{

    /**
     * @var string $DeliveryLocation_GetCountyResult
     */
    protected $DeliveryLocation_GetCountyResult = null;

    /**
     * @param string $DeliveryLocation_GetCountyResult
     */
    public function __construct($DeliveryLocation_GetCountyResult)
    {
      $this->DeliveryLocation_GetCountyResult = $DeliveryLocation_GetCountyResult;
    }

    /**
     * @return string
     */
    public function getDeliveryLocation_GetCountyResult()
    {
      return $this->DeliveryLocation_GetCountyResult;
    }

    /**
     * @param string $DeliveryLocation_GetCountyResult
     * @return \Economic\DeliveryLocation_GetCountyResponse
     */
    public function setDeliveryLocation_GetCountyResult($DeliveryLocation_GetCountyResult)
    {
      $this->DeliveryLocation_GetCountyResult = $DeliveryLocation_GetCountyResult;
      return $this;
    }

}
