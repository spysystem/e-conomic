<?php

namespace Economic;

class Subscription_GetCollectionResponse
{

    /**
     * @var SubscriptionCollection $Subscription_GetCollectionResult
     */
    protected $Subscription_GetCollectionResult = null;

    /**
     * @param SubscriptionCollection $Subscription_GetCollectionResult
     */
    public function __construct($Subscription_GetCollectionResult)
    {
      $this->Subscription_GetCollectionResult = $Subscription_GetCollectionResult;
    }

    /**
     * @return SubscriptionCollection
     */
    public function getSubscription_GetCollectionResult()
    {
      return $this->Subscription_GetCollectionResult;
    }

    /**
     * @param SubscriptionCollection $Subscription_GetCollectionResult
     * @return \Economic\Subscription_GetCollectionResponse
     */
    public function setSubscription_GetCollectionResult($Subscription_GetCollectionResult)
    {
      $this->Subscription_GetCollectionResult = $Subscription_GetCollectionResult;
      return $this;
    }

}
