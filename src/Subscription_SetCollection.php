<?php

namespace Economic;

class Subscription_SetCollection
{

    /**
     * @var SubscriptionHandle $subscriptionHandle
     */
    protected $subscriptionHandle = null;

    /**
     * @var SubscriptionCollection $value
     */
    protected $value = null;

    /**
     * @param SubscriptionHandle $subscriptionHandle
     * @param SubscriptionCollection $value
     */
    public function __construct($subscriptionHandle, $value)
    {
      $this->subscriptionHandle = $subscriptionHandle;
      $this->value = $value;
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
     * @return \Economic\Subscription_SetCollection
     */
    public function setSubscriptionHandle($subscriptionHandle)
    {
      $this->subscriptionHandle = $subscriptionHandle;
      return $this;
    }

    /**
     * @return SubscriptionCollection
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param SubscriptionCollection $value
     * @return \Economic\Subscription_SetCollection
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
