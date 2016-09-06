<?php

namespace Economic;

class Subscriber_SetSubscription
{

    /**
     * @var SubscriberHandle $subscriberHandle
     */
    protected $subscriberHandle = null;

    /**
     * @var SubscriptionHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param SubscriberHandle $subscriberHandle
     * @param SubscriptionHandle $valueHandle
     */
    public function __construct($subscriberHandle, $valueHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return SubscriberHandle
     */
    public function getSubscriberHandle()
    {
      return $this->subscriberHandle;
    }

    /**
     * @param SubscriberHandle $subscriberHandle
     * @return \Economic\Subscriber_SetSubscription
     */
    public function setSubscriberHandle($subscriberHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      return $this;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param SubscriptionHandle $valueHandle
     * @return \Economic\Subscriber_SetSubscription
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
