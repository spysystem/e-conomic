<?php

namespace Economic;

class Subscription_GetIncludeNameResponse
{

    /**
     * @var boolean $Subscription_GetIncludeNameResult
     */
    protected $Subscription_GetIncludeNameResult = null;

    /**
     * @param boolean $Subscription_GetIncludeNameResult
     */
    public function __construct($Subscription_GetIncludeNameResult)
    {
      $this->Subscription_GetIncludeNameResult = $Subscription_GetIncludeNameResult;
    }

    /**
     * @return boolean
     */
    public function getSubscription_GetIncludeNameResult()
    {
      return $this->Subscription_GetIncludeNameResult;
    }

    /**
     * @param boolean $Subscription_GetIncludeNameResult
     * @return \Economic\Subscription_GetIncludeNameResponse
     */
    public function setSubscription_GetIncludeNameResult($Subscription_GetIncludeNameResult)
    {
      $this->Subscription_GetIncludeNameResult = $Subscription_GetIncludeNameResult;
      return $this;
    }

}
