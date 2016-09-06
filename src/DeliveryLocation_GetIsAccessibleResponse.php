<?php

namespace Economic;

class DeliveryLocation_GetIsAccessibleResponse
{

    /**
     * @var boolean $DeliveryLocation_GetIsAccessibleResult
     */
    protected $DeliveryLocation_GetIsAccessibleResult = null;

    /**
     * @param boolean $DeliveryLocation_GetIsAccessibleResult
     */
    public function __construct($DeliveryLocation_GetIsAccessibleResult)
    {
      $this->DeliveryLocation_GetIsAccessibleResult = $DeliveryLocation_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getDeliveryLocation_GetIsAccessibleResult()
    {
      return $this->DeliveryLocation_GetIsAccessibleResult;
    }

    /**
     * @param boolean $DeliveryLocation_GetIsAccessibleResult
     * @return \Economic\DeliveryLocation_GetIsAccessibleResponse
     */
    public function setDeliveryLocation_GetIsAccessibleResult($DeliveryLocation_GetIsAccessibleResult)
    {
      $this->DeliveryLocation_GetIsAccessibleResult = $DeliveryLocation_GetIsAccessibleResult;
      return $this;
    }

}
