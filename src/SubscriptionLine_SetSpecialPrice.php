<?php

namespace Economic;

class SubscriptionLine_SetSpecialPrice
{

    /**
     * @var SubscriptionLineHandle $subscriptionLineHandle
     */
    protected $subscriptionLineHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @param float $value
     */
    public function __construct($subscriptionLineHandle, $value)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      $this->value = $value;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getSubscriptionLineHandle()
    {
      return $this->subscriptionLineHandle;
    }

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @return \Economic\SubscriptionLine_SetSpecialPrice
     */
    public function setSubscriptionLineHandle($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\SubscriptionLine_SetSpecialPrice
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
