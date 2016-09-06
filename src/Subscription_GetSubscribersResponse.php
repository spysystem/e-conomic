<?php

namespace Economic;

class Subscription_GetSubscribersResponse
{

    /**
     * @var ArrayOfSubscriberHandle $Subscription_GetSubscribersResult
     */
    protected $Subscription_GetSubscribersResult = null;

    /**
     * @param ArrayOfSubscriberHandle $Subscription_GetSubscribersResult
     */
    public function __construct($Subscription_GetSubscribersResult)
    {
      $this->Subscription_GetSubscribersResult = $Subscription_GetSubscribersResult;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getSubscription_GetSubscribersResult()
    {
      return $this->Subscription_GetSubscribersResult;
    }

    /**
     * @param ArrayOfSubscriberHandle $Subscription_GetSubscribersResult
     * @return \Economic\Subscription_GetSubscribersResponse
     */
    public function setSubscription_GetSubscribersResult($Subscription_GetSubscribersResult)
    {
      $this->Subscription_GetSubscribersResult = $Subscription_GetSubscribersResult;
      return $this;
    }

}
