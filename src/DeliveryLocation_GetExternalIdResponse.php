<?php

namespace Economic;

class DeliveryLocation_GetExternalIdResponse
{

    /**
     * @var string $DeliveryLocation_GetExternalIdResult
     */
    protected $DeliveryLocation_GetExternalIdResult = null;

    /**
     * @param string $DeliveryLocation_GetExternalIdResult
     */
    public function __construct($DeliveryLocation_GetExternalIdResult)
    {
      $this->DeliveryLocation_GetExternalIdResult = $DeliveryLocation_GetExternalIdResult;
    }

    /**
     * @return string
     */
    public function getDeliveryLocation_GetExternalIdResult()
    {
      return $this->DeliveryLocation_GetExternalIdResult;
    }

    /**
     * @param string $DeliveryLocation_GetExternalIdResult
     * @return \Economic\DeliveryLocation_GetExternalIdResponse
     */
    public function setDeliveryLocation_GetExternalIdResult($DeliveryLocation_GetExternalIdResult)
    {
      $this->DeliveryLocation_GetExternalIdResult = $DeliveryLocation_GetExternalIdResult;
      return $this;
    }

}
