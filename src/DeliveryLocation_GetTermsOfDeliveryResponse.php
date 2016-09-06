<?php

namespace Economic;

class DeliveryLocation_GetTermsOfDeliveryResponse
{

    /**
     * @var string $DeliveryLocation_GetTermsOfDeliveryResult
     */
    protected $DeliveryLocation_GetTermsOfDeliveryResult = null;

    /**
     * @param string $DeliveryLocation_GetTermsOfDeliveryResult
     */
    public function __construct($DeliveryLocation_GetTermsOfDeliveryResult)
    {
      $this->DeliveryLocation_GetTermsOfDeliveryResult = $DeliveryLocation_GetTermsOfDeliveryResult;
    }

    /**
     * @return string
     */
    public function getDeliveryLocation_GetTermsOfDeliveryResult()
    {
      return $this->DeliveryLocation_GetTermsOfDeliveryResult;
    }

    /**
     * @param string $DeliveryLocation_GetTermsOfDeliveryResult
     * @return \Economic\DeliveryLocation_GetTermsOfDeliveryResponse
     */
    public function setDeliveryLocation_GetTermsOfDeliveryResult($DeliveryLocation_GetTermsOfDeliveryResult)
    {
      $this->DeliveryLocation_GetTermsOfDeliveryResult = $DeliveryLocation_GetTermsOfDeliveryResult;
      return $this;
    }

}
