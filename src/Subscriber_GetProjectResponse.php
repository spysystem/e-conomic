<?php

namespace Economic;

class Subscriber_GetProjectResponse
{

    /**
     * @var ProjectHandle $Subscriber_GetProjectResult
     */
    protected $Subscriber_GetProjectResult = null;

    /**
     * @param ProjectHandle $Subscriber_GetProjectResult
     */
    public function __construct($Subscriber_GetProjectResult)
    {
      $this->Subscriber_GetProjectResult = $Subscriber_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getSubscriber_GetProjectResult()
    {
      return $this->Subscriber_GetProjectResult;
    }

    /**
     * @param ProjectHandle $Subscriber_GetProjectResult
     * @return \Economic\Subscriber_GetProjectResponse
     */
    public function setSubscriber_GetProjectResult($Subscriber_GetProjectResult)
    {
      $this->Subscriber_GetProjectResult = $Subscriber_GetProjectResult;
      return $this;
    }

}
