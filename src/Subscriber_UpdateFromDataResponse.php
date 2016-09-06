<?php

namespace Economic;

class Subscriber_UpdateFromDataResponse
{

    /**
     * @var SubscriberHandle $Subscriber_UpdateFromDataResult
     */
    protected $Subscriber_UpdateFromDataResult = null;

    /**
     * @param SubscriberHandle $Subscriber_UpdateFromDataResult
     */
    public function __construct($Subscriber_UpdateFromDataResult)
    {
      $this->Subscriber_UpdateFromDataResult = $Subscriber_UpdateFromDataResult;
    }

    /**
     * @return SubscriberHandle
     */
    public function getSubscriber_UpdateFromDataResult()
    {
      return $this->Subscriber_UpdateFromDataResult;
    }

    /**
     * @param SubscriberHandle $Subscriber_UpdateFromDataResult
     * @return \Economic\Subscriber_UpdateFromDataResponse
     */
    public function setSubscriber_UpdateFromDataResult($Subscriber_UpdateFromDataResult)
    {
      $this->Subscriber_UpdateFromDataResult = $Subscriber_UpdateFromDataResult;
      return $this;
    }

}
