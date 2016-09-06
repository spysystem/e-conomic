<?php

namespace Economic;

class Subscription_UpdateFromDataResponse
{

    /**
     * @var SubscriptionHandle $Subscription_UpdateFromDataResult
     */
    protected $Subscription_UpdateFromDataResult = null;

    /**
     * @param SubscriptionHandle $Subscription_UpdateFromDataResult
     */
    public function __construct($Subscription_UpdateFromDataResult)
    {
      $this->Subscription_UpdateFromDataResult = $Subscription_UpdateFromDataResult;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscription_UpdateFromDataResult()
    {
      return $this->Subscription_UpdateFromDataResult;
    }

    /**
     * @param SubscriptionHandle $Subscription_UpdateFromDataResult
     * @return \Economic\Subscription_UpdateFromDataResponse
     */
    public function setSubscription_UpdateFromDataResult($Subscription_UpdateFromDataResult)
    {
      $this->Subscription_UpdateFromDataResult = $Subscription_UpdateFromDataResult;
      return $this;
    }

}
