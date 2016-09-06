<?php

namespace Economic;

class Subscriber_GetAllResponse
{

    /**
     * @var ArrayOfSubscriberHandle $Subscriber_GetAllResult
     */
    protected $Subscriber_GetAllResult = null;

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_GetAllResult
     */
    public function __construct($Subscriber_GetAllResult)
    {
      $this->Subscriber_GetAllResult = $Subscriber_GetAllResult;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getSubscriber_GetAllResult()
    {
      return $this->Subscriber_GetAllResult;
    }

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_GetAllResult
     * @return \Economic\Subscriber_GetAllResponse
     */
    public function setSubscriber_GetAllResult($Subscriber_GetAllResult)
    {
      $this->Subscriber_GetAllResult = $Subscriber_GetAllResult;
      return $this;
    }

}
