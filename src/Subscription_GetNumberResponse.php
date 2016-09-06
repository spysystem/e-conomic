<?php

namespace Economic;

class Subscription_GetNumberResponse
{

    /**
     * @var int $Subscription_GetNumberResult
     */
    protected $Subscription_GetNumberResult = null;

    /**
     * @param int $Subscription_GetNumberResult
     */
    public function __construct($Subscription_GetNumberResult)
    {
      $this->Subscription_GetNumberResult = $Subscription_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getSubscription_GetNumberResult()
    {
      return $this->Subscription_GetNumberResult;
    }

    /**
     * @param int $Subscription_GetNumberResult
     * @return \Economic\Subscription_GetNumberResponse
     */
    public function setSubscription_GetNumberResult($Subscription_GetNumberResult)
    {
      $this->Subscription_GetNumberResult = $Subscription_GetNumberResult;
      return $this;
    }

}
