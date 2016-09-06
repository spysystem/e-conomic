<?php

namespace Economic;

class Subscriber_GetDataResponse
{

    /**
     * @var SubscriberData $Subscriber_GetDataResult
     */
    protected $Subscriber_GetDataResult = null;

    /**
     * @param SubscriberData $Subscriber_GetDataResult
     */
    public function __construct($Subscriber_GetDataResult)
    {
      $this->Subscriber_GetDataResult = $Subscriber_GetDataResult;
    }

    /**
     * @return SubscriberData
     */
    public function getSubscriber_GetDataResult()
    {
      return $this->Subscriber_GetDataResult;
    }

    /**
     * @param SubscriberData $Subscriber_GetDataResult
     * @return \Economic\Subscriber_GetDataResponse
     */
    public function setSubscriber_GetDataResult($Subscriber_GetDataResult)
    {
      $this->Subscriber_GetDataResult = $Subscriber_GetDataResult;
      return $this;
    }

}
