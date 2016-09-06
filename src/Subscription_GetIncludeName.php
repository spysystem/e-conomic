<?php

namespace Economic;

class Subscription_GetIncludeName
{

    /**
     * @var SubscriptionHandle $subscriptionHandle
     */
    protected $subscriptionHandle = null;

    /**
     * @param SubscriptionHandle $subscriptionHandle
     */
    public function __construct($subscriptionHandle)
    {
      $this->subscriptionHandle = $subscriptionHandle;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscriptionHandle()
    {
      return $this->subscriptionHandle;
    }

    /**
     * @param SubscriptionHandle $subscriptionHandle
     * @return \Economic\Subscription_GetIncludeName
     */
    public function setSubscriptionHandle($subscriptionHandle)
    {
      $this->subscriptionHandle = $subscriptionHandle;
      return $this;
    }

}
