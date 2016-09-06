<?php

namespace Economic;

class Subscription_FindByNumberResponse
{

    /**
     * @var SubscriptionHandle $Subscription_FindByNumberResult
     */
    protected $Subscription_FindByNumberResult = null;

    /**
     * @param SubscriptionHandle $Subscription_FindByNumberResult
     */
    public function __construct($Subscription_FindByNumberResult)
    {
      $this->Subscription_FindByNumberResult = $Subscription_FindByNumberResult;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscription_FindByNumberResult()
    {
      return $this->Subscription_FindByNumberResult;
    }

    /**
     * @param SubscriptionHandle $Subscription_FindByNumberResult
     * @return \Economic\Subscription_FindByNumberResponse
     */
    public function setSubscription_FindByNumberResult($Subscription_FindByNumberResult)
    {
      $this->Subscription_FindByNumberResult = $Subscription_FindByNumberResult;
      return $this;
    }

}
