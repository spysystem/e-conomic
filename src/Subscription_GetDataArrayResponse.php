<?php

namespace Economic;

class Subscription_GetDataArrayResponse
{

    /**
     * @var ArrayOfSubscriptionData $Subscription_GetDataArrayResult
     */
    protected $Subscription_GetDataArrayResult = null;

    /**
     * @param ArrayOfSubscriptionData $Subscription_GetDataArrayResult
     */
    public function __construct($Subscription_GetDataArrayResult)
    {
      $this->Subscription_GetDataArrayResult = $Subscription_GetDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriptionData
     */
    public function getSubscription_GetDataArrayResult()
    {
      return $this->Subscription_GetDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriptionData $Subscription_GetDataArrayResult
     * @return \Economic\Subscription_GetDataArrayResponse
     */
    public function setSubscription_GetDataArrayResult($Subscription_GetDataArrayResult)
    {
      $this->Subscription_GetDataArrayResult = $Subscription_GetDataArrayResult;
      return $this;
    }

}
