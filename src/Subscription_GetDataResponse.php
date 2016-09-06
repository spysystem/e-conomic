<?php

namespace Economic;

class Subscription_GetDataResponse
{

    /**
     * @var SubscriptionData $Subscription_GetDataResult
     */
    protected $Subscription_GetDataResult = null;

    /**
     * @param SubscriptionData $Subscription_GetDataResult
     */
    public function __construct($Subscription_GetDataResult)
    {
      $this->Subscription_GetDataResult = $Subscription_GetDataResult;
    }

    /**
     * @return SubscriptionData
     */
    public function getSubscription_GetDataResult()
    {
      return $this->Subscription_GetDataResult;
    }

    /**
     * @param SubscriptionData $Subscription_GetDataResult
     * @return \Economic\Subscription_GetDataResponse
     */
    public function setSubscription_GetDataResult($Subscription_GetDataResult)
    {
      $this->Subscription_GetDataResult = $Subscription_GetDataResult;
      return $this;
    }

}
