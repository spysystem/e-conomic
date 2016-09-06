<?php

namespace Economic;

class Subscriber_FindBySubscriptionResponse
{

    /**
     * @var ArrayOfSubscriberHandle $Subscriber_FindBySubscriptionResult
     */
    protected $Subscriber_FindBySubscriptionResult = null;

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_FindBySubscriptionResult
     */
    public function __construct($Subscriber_FindBySubscriptionResult)
    {
      $this->Subscriber_FindBySubscriptionResult = $Subscriber_FindBySubscriptionResult;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getSubscriber_FindBySubscriptionResult()
    {
      return $this->Subscriber_FindBySubscriptionResult;
    }

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_FindBySubscriptionResult
     * @return \Economic\Subscriber_FindBySubscriptionResponse
     */
    public function setSubscriber_FindBySubscriptionResult($Subscriber_FindBySubscriptionResult)
    {
      $this->Subscriber_FindBySubscriptionResult = $Subscriber_FindBySubscriptionResult;
      return $this;
    }

}
