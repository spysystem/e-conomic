<?php

namespace Economic;

class Subscription_CreateFromDataResponse
{

    /**
     * @var SubscriptionHandle $Subscription_CreateFromDataResult
     */
    protected $Subscription_CreateFromDataResult = null;

    /**
     * @param SubscriptionHandle $Subscription_CreateFromDataResult
     */
    public function __construct($Subscription_CreateFromDataResult)
    {
      $this->Subscription_CreateFromDataResult = $Subscription_CreateFromDataResult;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscription_CreateFromDataResult()
    {
      return $this->Subscription_CreateFromDataResult;
    }

    /**
     * @param SubscriptionHandle $Subscription_CreateFromDataResult
     * @return \Economic\Subscription_CreateFromDataResponse
     */
    public function setSubscription_CreateFromDataResult($Subscription_CreateFromDataResult)
    {
      $this->Subscription_CreateFromDataResult = $Subscription_CreateFromDataResult;
      return $this;
    }

}
