<?php

namespace Economic;

class Subscriber_GetCommentsResponse
{

    /**
     * @var string $Subscriber_GetCommentsResult
     */
    protected $Subscriber_GetCommentsResult = null;

    /**
     * @param string $Subscriber_GetCommentsResult
     */
    public function __construct($Subscriber_GetCommentsResult)
    {
      $this->Subscriber_GetCommentsResult = $Subscriber_GetCommentsResult;
    }

    /**
     * @return string
     */
    public function getSubscriber_GetCommentsResult()
    {
      return $this->Subscriber_GetCommentsResult;
    }

    /**
     * @param string $Subscriber_GetCommentsResult
     * @return \Economic\Subscriber_GetCommentsResponse
     */
    public function setSubscriber_GetCommentsResult($Subscriber_GetCommentsResult)
    {
      $this->Subscriber_GetCommentsResult = $Subscriber_GetCommentsResult;
      return $this;
    }

}
