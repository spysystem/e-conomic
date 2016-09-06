<?php

namespace Economic;

class Subscription_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfSubscriptionHandle $Subscription_CreateFromDataArrayResult
     */
    protected $Subscription_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_CreateFromDataArrayResult
     */
    public function __construct($Subscription_CreateFromDataArrayResult)
    {
      $this->Subscription_CreateFromDataArrayResult = $Subscription_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriptionHandle
     */
    public function getSubscription_CreateFromDataArrayResult()
    {
      return $this->Subscription_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_CreateFromDataArrayResult
     * @return \Economic\Subscription_CreateFromDataArrayResponse
     */
    public function setSubscription_CreateFromDataArrayResult($Subscription_CreateFromDataArrayResult)
    {
      $this->Subscription_CreateFromDataArrayResult = $Subscription_CreateFromDataArrayResult;
      return $this;
    }

}
