<?php

namespace Economic;

class Subscriber_CreateFromDataResponse
{

    /**
     * @var SubscriberHandle $Subscriber_CreateFromDataResult
     */
    protected $Subscriber_CreateFromDataResult = null;

    /**
     * @param SubscriberHandle $Subscriber_CreateFromDataResult
     */
    public function __construct($Subscriber_CreateFromDataResult)
    {
      $this->Subscriber_CreateFromDataResult = $Subscriber_CreateFromDataResult;
    }

    /**
     * @return SubscriberHandle
     */
    public function getSubscriber_CreateFromDataResult()
    {
      return $this->Subscriber_CreateFromDataResult;
    }

    /**
     * @param SubscriberHandle $Subscriber_CreateFromDataResult
     * @return \Economic\Subscriber_CreateFromDataResponse
     */
    public function setSubscriber_CreateFromDataResult($Subscriber_CreateFromDataResult)
    {
      $this->Subscriber_CreateFromDataResult = $Subscriber_CreateFromDataResult;
      return $this;
    }

}
