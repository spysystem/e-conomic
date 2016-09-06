<?php

namespace Economic;

class DeliveryLocation_FindByExternalIdResponse
{

    /**
     * @var DeliveryLocationHandle $DeliveryLocation_FindByExternalIdResult
     */
    protected $DeliveryLocation_FindByExternalIdResult = null;

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_FindByExternalIdResult
     */
    public function __construct($DeliveryLocation_FindByExternalIdResult)
    {
      $this->DeliveryLocation_FindByExternalIdResult = $DeliveryLocation_FindByExternalIdResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getDeliveryLocation_FindByExternalIdResult()
    {
      return $this->DeliveryLocation_FindByExternalIdResult;
    }

    /**
     * @param DeliveryLocationHandle $DeliveryLocation_FindByExternalIdResult
     * @return \Economic\DeliveryLocation_FindByExternalIdResponse
     */
    public function setDeliveryLocation_FindByExternalIdResult($DeliveryLocation_FindByExternalIdResult)
    {
      $this->DeliveryLocation_FindByExternalIdResult = $DeliveryLocation_FindByExternalIdResult;
      return $this;
    }

}
