<?php

namespace Economic;

class Subscriber_CreateResponse
{

    /**
     * @var SubscriberHandle $Subscriber_CreateResult
     */
    protected $Subscriber_CreateResult = null;

    /**
     * @param SubscriberHandle $Subscriber_CreateResult
     */
    public function __construct($Subscriber_CreateResult)
    {
      $this->Subscriber_CreateResult = $Subscriber_CreateResult;
    }

    /**
     * @return SubscriberHandle
     */
    public function getSubscriber_CreateResult()
    {
      return $this->Subscriber_CreateResult;
    }

    /**
     * @param SubscriberHandle $Subscriber_CreateResult
     * @return \Economic\Subscriber_CreateResponse
     */
    public function setSubscriber_CreateResult($Subscriber_CreateResult)
    {
      $this->Subscriber_CreateResult = $Subscriber_CreateResult;
      return $this;
    }

}
