<?php

namespace Economic;

class Subscription_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfSubscriptionHandle $Subscription_UpdateFromDataArrayResult
     */
    protected $Subscription_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_UpdateFromDataArrayResult
     */
    public function __construct($Subscription_UpdateFromDataArrayResult)
    {
      $this->Subscription_UpdateFromDataArrayResult = $Subscription_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriptionHandle
     */
    public function getSubscription_UpdateFromDataArrayResult()
    {
      return $this->Subscription_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriptionHandle $Subscription_UpdateFromDataArrayResult
     * @return \Economic\Subscription_UpdateFromDataArrayResponse
     */
    public function setSubscription_UpdateFromDataArrayResult($Subscription_UpdateFromDataArrayResult)
    {
      $this->Subscription_UpdateFromDataArrayResult = $Subscription_UpdateFromDataArrayResult;
      return $this;
    }

}
