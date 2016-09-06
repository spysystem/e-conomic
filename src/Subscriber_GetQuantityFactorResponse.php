<?php

namespace Economic;

class Subscriber_GetQuantityFactorResponse
{

    /**
     * @var float $Subscriber_GetQuantityFactorResult
     */
    protected $Subscriber_GetQuantityFactorResult = null;

    /**
     * @param float $Subscriber_GetQuantityFactorResult
     */
    public function __construct($Subscriber_GetQuantityFactorResult)
    {
      $this->Subscriber_GetQuantityFactorResult = $Subscriber_GetQuantityFactorResult;
    }

    /**
     * @return float
     */
    public function getSubscriber_GetQuantityFactorResult()
    {
      return $this->Subscriber_GetQuantityFactorResult;
    }

    /**
     * @param float $Subscriber_GetQuantityFactorResult
     * @return \Economic\Subscriber_GetQuantityFactorResponse
     */
    public function setSubscriber_GetQuantityFactorResult($Subscriber_GetQuantityFactorResult)
    {
      $this->Subscriber_GetQuantityFactorResult = $Subscriber_GetQuantityFactorResult;
      return $this;
    }

}
