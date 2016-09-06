<?php

namespace Economic;

class Subscription_GetAllResponse
{

    /**
     * @var ArrayOfSubscriptionHandle $Subscription_GetAllResult
     */
    protected $Subscription_GetAllResult = null;

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_GetAllResult
     */
    public function __construct($Subscription_GetAllResult)
    {
      $this->Subscription_GetAllResult = $Subscription_GetAllResult;
    }

    /**
     * @return ArrayOfSubscriptionHandle
     */
    public function getSubscription_GetAllResult()
    {
      return $this->Subscription_GetAllResult;
    }

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_GetAllResult
     * @return \Economic\Subscription_GetAllResponse
     */
    public function setSubscription_GetAllResult($Subscription_GetAllResult)
    {
      $this->Subscription_GetAllResult = $Subscription_GetAllResult;
      return $this;
    }

}
