<?php

namespace Economic;

class SubscriptionLine_SetProductName
{

    /**
     * @var SubscriptionLineHandle $subscriptionLineHandle
     */
    protected $subscriptionLineHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @param string $value
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
     * @return \Economic\SubscriptionLine_SetProductName
     */
    public function setSubscriptionLineHandle($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
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
     * @return \Economic\SubscriptionLine_SetProductName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
