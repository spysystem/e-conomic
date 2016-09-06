<?php

namespace Economic;

class Subscription_SetSubscriptionInterval
{

    /**
     * @var SubscriptionHandle $subscriptionHandle
     */
    protected $subscriptionHandle = null;

    /**
     * @var SubscriptionInterval $value
     */
    protected $value = null;

    /**
     * @param SubscriptionHandle $subscriptionHandle
     * @param SubscriptionInterval $value
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
     * @return \Economic\Subscription_SetSubscriptionInterval
     */
    public function setSubscriptionHandle($subscriptionHandle)
    {
      $this->subscriptionHandle = $subscriptionHandle;
      return $this;
    }

    /**
     * @return SubscriptionInterval
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param SubscriptionInterval $value
     * @return \Economic\Subscription_SetSubscriptionInterval
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
