<?php

namespace Economic;

class Subscriber_GetSubscriptionResponse
{

    /**
     * @var SubscriptionHandle $Subscriber_GetSubscriptionResult
     */
    protected $Subscriber_GetSubscriptionResult = null;

    /**
     * @param SubscriptionHandle $Subscriber_GetSubscriptionResult
     */
    public function __construct($Subscriber_GetSubscriptionResult)
    {
      $this->Subscriber_GetSubscriptionResult = $Subscriber_GetSubscriptionResult;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscriber_GetSubscriptionResult()
    {
      return $this->Subscriber_GetSubscriptionResult;
    }

    /**
     * @param SubscriptionHandle $Subscriber_GetSubscriptionResult
     * @return \Economic\Subscriber_GetSubscriptionResponse
     */
    public function setSubscriber_GetSubscriptionResult($Subscriber_GetSubscriptionResult)
    {
      $this->Subscriber_GetSubscriptionResult = $Subscriber_GetSubscriptionResult;
      return $this;
    }

}
