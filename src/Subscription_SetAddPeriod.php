<?php

namespace Economic;

class Subscription_SetAddPeriod
{

    /**
     * @var SubscriptionHandle $subscriptionHandle
     */
    protected $subscriptionHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param SubscriptionHandle $subscriptionHandle
     * @param boolean $value
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
     * @return \Economic\Subscription_SetAddPeriod
     */
    public function setSubscriptionHandle($subscriptionHandle)
    {
      $this->subscriptionHandle = $subscriptionHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\Subscription_SetAddPeriod
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
