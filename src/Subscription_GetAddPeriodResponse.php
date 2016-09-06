<?php

namespace Economic;

class Subscription_GetAddPeriodResponse
{

    /**
     * @var boolean $Subscription_GetAddPeriodResult
     */
    protected $Subscription_GetAddPeriodResult = null;

    /**
     * @param boolean $Subscription_GetAddPeriodResult
     */
    public function __construct($Subscription_GetAddPeriodResult)
    {
      $this->Subscription_GetAddPeriodResult = $Subscription_GetAddPeriodResult;
    }

    /**
     * @return boolean
     */
    public function getSubscription_GetAddPeriodResult()
    {
      return $this->Subscription_GetAddPeriodResult;
    }

    /**
     * @param boolean $Subscription_GetAddPeriodResult
     * @return \Economic\Subscription_GetAddPeriodResponse
     */
    public function setSubscription_GetAddPeriodResult($Subscription_GetAddPeriodResult)
    {
      $this->Subscription_GetAddPeriodResult = $Subscription_GetAddPeriodResult;
      return $this;
    }

}
