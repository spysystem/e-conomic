<?php

namespace Economic;

class Subscription_GetNameResponse
{

    /**
     * @var string $Subscription_GetNameResult
     */
    protected $Subscription_GetNameResult = null;

    /**
     * @param string $Subscription_GetNameResult
     */
    public function __construct($Subscription_GetNameResult)
    {
      $this->Subscription_GetNameResult = $Subscription_GetNameResult;
    }

    /**
     * @return string
     */
    public function getSubscription_GetNameResult()
    {
      return $this->Subscription_GetNameResult;
    }

    /**
     * @param string $Subscription_GetNameResult
     * @return \Economic\Subscription_GetNameResponse
     */
    public function setSubscription_GetNameResult($Subscription_GetNameResult)
    {
      $this->Subscription_GetNameResult = $Subscription_GetNameResult;
      return $this;
    }

}
