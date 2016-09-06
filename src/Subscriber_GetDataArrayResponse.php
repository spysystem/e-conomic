<?php

namespace Economic;

class Subscriber_GetDataArrayResponse
{

    /**
     * @var ArrayOfSubscriberData $Subscriber_GetDataArrayResult
     */
    protected $Subscriber_GetDataArrayResult = null;

    /**
     * @param ArrayOfSubscriberData $Subscriber_GetDataArrayResult
     */
    public function __construct($Subscriber_GetDataArrayResult)
    {
      $this->Subscriber_GetDataArrayResult = $Subscriber_GetDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriberData
     */
    public function getSubscriber_GetDataArrayResult()
    {
      return $this->Subscriber_GetDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriberData $Subscriber_GetDataArrayResult
     * @return \Economic\Subscriber_GetDataArrayResponse
     */
    public function setSubscriber_GetDataArrayResult($Subscriber_GetDataArrayResult)
    {
      $this->Subscriber_GetDataArrayResult = $Subscriber_GetDataArrayResult;
      return $this;
    }

}
