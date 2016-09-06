<?php

namespace Economic;

class Subscription_GetSubscriptionIntervalResponse
{

    /**
     * @var SubscriptionInterval $Subscription_GetSubscriptionIntervalResult
     */
    protected $Subscription_GetSubscriptionIntervalResult = null;

    /**
     * @param SubscriptionInterval $Subscription_GetSubscriptionIntervalResult
     */
    public function __construct($Subscription_GetSubscriptionIntervalResult)
    {
      $this->Subscription_GetSubscriptionIntervalResult = $Subscription_GetSubscriptionIntervalResult;
    }

    /**
     * @return SubscriptionInterval
     */
    public function getSubscription_GetSubscriptionIntervalResult()
    {
      return $this->Subscription_GetSubscriptionIntervalResult;
    }

    /**
     * @param SubscriptionInterval $Subscription_GetSubscriptionIntervalResult
     * @return \Economic\Subscription_GetSubscriptionIntervalResponse
     */
    public function setSubscription_GetSubscriptionIntervalResult($Subscription_GetSubscriptionIntervalResult)
    {
      $this->Subscription_GetSubscriptionIntervalResult = $Subscription_GetSubscriptionIntervalResult;
      return $this;
    }

}
