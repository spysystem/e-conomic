<?php

namespace Economic;

class Subscriber_FindBySubscriptonListResponse
{

    /**
     * @var ArrayOfSubscriberHandle $Subscriber_FindBySubscriptonListResult
     */
    protected $Subscriber_FindBySubscriptonListResult = null;

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_FindBySubscriptonListResult
     */
    public function __construct($Subscriber_FindBySubscriptonListResult)
    {
      $this->Subscriber_FindBySubscriptonListResult = $Subscriber_FindBySubscriptonListResult;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getSubscriber_FindBySubscriptonListResult()
    {
      return $this->Subscriber_FindBySubscriptonListResult;
    }

    /**
     * @param ArrayOfSubscriberHandle $Subscriber_FindBySubscriptonListResult
     * @return \Economic\Subscriber_FindBySubscriptonListResponse
     */
    public function setSubscriber_FindBySubscriptonListResult($Subscriber_FindBySubscriptonListResult)
    {
      $this->Subscriber_FindBySubscriptonListResult = $Subscriber_FindBySubscriptonListResult;
      return $this;
    }

}
