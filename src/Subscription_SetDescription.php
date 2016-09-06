<?php

namespace Economic;

class Subscription_SetDescription
{

    /**
     * @var SubscriptionHandle $subscriptionHandle
     */
    protected $subscriptionHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param SubscriptionHandle $subscriptionHandle
     * @param string $value
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
     * @return \Economic\Subscription_SetDescription
     */
    public function setSubscriptionHandle($subscriptionHandle)
    {
      $this->subscriptionHandle = $subscriptionHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Subscription_SetDescription
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
