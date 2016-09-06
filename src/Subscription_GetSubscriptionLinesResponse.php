<?php

namespace Economic;

class Subscription_GetSubscriptionLinesResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $Subscription_GetSubscriptionLinesResult
     */
    protected $Subscription_GetSubscriptionLinesResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $Subscription_GetSubscriptionLinesResult
     */
    public function __construct($Subscription_GetSubscriptionLinesResult)
    {
      $this->Subscription_GetSubscriptionLinesResult = $Subscription_GetSubscriptionLinesResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscription_GetSubscriptionLinesResult()
    {
      return $this->Subscription_GetSubscriptionLinesResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $Subscription_GetSubscriptionLinesResult
     * @return \Economic\Subscription_GetSubscriptionLinesResponse
     */
    public function setSubscription_GetSubscriptionLinesResult($Subscription_GetSubscriptionLinesResult)
    {
      $this->Subscription_GetSubscriptionLinesResult = $Subscription_GetSubscriptionLinesResult;
      return $this;
    }

}
