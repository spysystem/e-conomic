<?php

namespace Economic;

class Subscription_GetNextAvailableNumberResponse
{

    /**
     * @var int $Subscription_GetNextAvailableNumberResult
     */
    protected $Subscription_GetNextAvailableNumberResult = null;

    /**
     * @param int $Subscription_GetNextAvailableNumberResult
     */
    public function __construct($Subscription_GetNextAvailableNumberResult)
    {
      $this->Subscription_GetNextAvailableNumberResult = $Subscription_GetNextAvailableNumberResult;
    }

    /**
     * @return int
     */
    public function getSubscription_GetNextAvailableNumberResult()
    {
      return $this->Subscription_GetNextAvailableNumberResult;
    }

    /**
     * @param int $Subscription_GetNextAvailableNumberResult
     * @return \Economic\Subscription_GetNextAvailableNumberResponse
     */
    public function setSubscription_GetNextAvailableNumberResult($Subscription_GetNextAvailableNumberResult)
    {
      $this->Subscription_GetNextAvailableNumberResult = $Subscription_GetNextAvailableNumberResult;
      return $this;
    }

}
