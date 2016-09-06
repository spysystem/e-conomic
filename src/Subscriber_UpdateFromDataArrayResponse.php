<?php

namespace Economic;

class Subscriber_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfSubscriberHandle $Subscriber_UpdateFromDataArrayResult
     */
    protected $Subscriber_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_UpdateFromDataArrayResult
     */
    public function __construct($Subscriber_UpdateFromDataArrayResult)
    {
      $this->Subscriber_UpdateFromDataArrayResult = $Subscriber_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getSubscriber_UpdateFromDataArrayResult()
    {
      return $this->Subscriber_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_UpdateFromDataArrayResult
     * @return \Economic\Subscriber_UpdateFromDataArrayResponse
     */
    public function setSubscriber_UpdateFromDataArrayResult($Subscriber_UpdateFromDataArrayResult)
    {
      $this->Subscriber_UpdateFromDataArrayResult = $Subscriber_UpdateFromDataArrayResult;
      return $this;
    }

}
