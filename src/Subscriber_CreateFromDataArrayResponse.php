<?php

namespace Economic;

class Subscriber_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfSubscriberHandle $Subscriber_CreateFromDataArrayResult
     */
    protected $Subscriber_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_CreateFromDataArrayResult
     */
    public function __construct($Subscriber_CreateFromDataArrayResult)
    {
      $this->Subscriber_CreateFromDataArrayResult = $Subscriber_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getSubscriber_CreateFromDataArrayResult()
    {
      return $this->Subscriber_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_CreateFromDataArrayResult
     * @return \Economic\Subscriber_CreateFromDataArrayResponse
     */
    public function setSubscriber_CreateFromDataArrayResult($Subscriber_CreateFromDataArrayResult)
    {
      $this->Subscriber_CreateFromDataArrayResult = $Subscriber_CreateFromDataArrayResult;
      return $this;
    }

}
