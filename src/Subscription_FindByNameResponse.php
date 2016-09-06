<?php

namespace Economic;

class Subscription_FindByNameResponse
{

    /**
     * @var ArrayOfSubscriptionHandle $Subscription_FindByNameResult
     */
    protected $Subscription_FindByNameResult = null;

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_FindByNameResult
     */
    public function __construct($Subscription_FindByNameResult)
    {
      $this->Subscription_FindByNameResult = $Subscription_FindByNameResult;
    }

    /**
     * @return ArrayOfSubscriptionHandle
     */
    public function getSubscription_FindByNameResult()
    {
      return $this->Subscription_FindByNameResult;
    }

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_FindByNameResult
     * @return \Economic\Subscription_FindByNameResponse
     */
    public function setSubscription_FindByNameResult($Subscription_FindByNameResult)
    {
      $this->Subscription_FindByNameResult = $Subscription_FindByNameResult;
      return $this;
    }

}
