<?php

namespace Economic;

class SubscriptionLine_GetQuantityResponse
{

    /**
     * @var float $SubscriptionLine_GetQuantityResult
     */
    protected $SubscriptionLine_GetQuantityResult = null;

    /**
     * @param float $SubscriptionLine_GetQuantityResult
     */
    public function __construct($SubscriptionLine_GetQuantityResult)
    {
      $this->SubscriptionLine_GetQuantityResult = $SubscriptionLine_GetQuantityResult;
    }

    /**
     * @return float
     */
    public function getSubscriptionLine_GetQuantityResult()
    {
      return $this->SubscriptionLine_GetQuantityResult;
    }

    /**
     * @param float $SubscriptionLine_GetQuantityResult
     * @return \Economic\SubscriptionLine_GetQuantityResponse
     */
    public function setSubscriptionLine_GetQuantityResult($SubscriptionLine_GetQuantityResult)
    {
      $this->SubscriptionLine_GetQuantityResult = $SubscriptionLine_GetQuantityResult;
      return $this;
    }

}
