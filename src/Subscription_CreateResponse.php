<?php

namespace Economic;

class Subscription_CreateResponse
{

    /**
     * @var SubscriptionHandle $Subscription_CreateResult
     */
    protected $Subscription_CreateResult = null;

    /**
     * @param SubscriptionHandle $Subscription_CreateResult
     */
    public function __construct($Subscription_CreateResult)
    {
      $this->Subscription_CreateResult = $Subscription_CreateResult;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscription_CreateResult()
    {
      return $this->Subscription_CreateResult;
    }

    /**
     * @param SubscriptionHandle $Subscription_CreateResult
     * @return \Economic\Subscription_CreateResponse
     */
    public function setSubscription_CreateResult($Subscription_CreateResult)
    {
      $this->Subscription_CreateResult = $Subscription_CreateResult;
      return $this;
    }

}
