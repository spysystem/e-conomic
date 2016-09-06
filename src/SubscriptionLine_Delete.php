<?php

namespace Economic;

class SubscriptionLine_Delete
{

    /**
     * @var SubscriptionLineHandle $subscriptionLineHandle
     */
    protected $subscriptionLineHandle = null;

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     */
    public function __construct($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
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
     * @return \Economic\SubscriptionLine_Delete
     */
    public function setSubscriptionLineHandle($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      return $this;
    }

}
