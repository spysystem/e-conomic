<?php

namespace Economic;

class Subscriber_GetSpecialPrice
{

    /**
     * @var SubscriberHandle $subscriberHandle
     */
    protected $subscriberHandle = null;

    /**
     * @param SubscriberHandle $subscriberHandle
     */
    public function __construct($subscriberHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
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
     * @return \Economic\Subscriber_GetSpecialPrice
     */
    public function setSubscriberHandle($subscriberHandle)
    {
      $this->subscriberHandle = $subscriberHandle;
      return $this;
    }

}
