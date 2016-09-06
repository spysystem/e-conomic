<?php

namespace Economic;

class Subscription_GetCalendarYearBasisResponse
{

    /**
     * @var boolean $Subscription_GetCalendarYearBasisResult
     */
    protected $Subscription_GetCalendarYearBasisResult = null;

    /**
     * @param boolean $Subscription_GetCalendarYearBasisResult
     */
    public function __construct($Subscription_GetCalendarYearBasisResult)
    {
      $this->Subscription_GetCalendarYearBasisResult = $Subscription_GetCalendarYearBasisResult;
    }

    /**
     * @return boolean
     */
    public function getSubscription_GetCalendarYearBasisResult()
    {
      return $this->Subscription_GetCalendarYearBasisResult;
    }

    /**
     * @param boolean $Subscription_GetCalendarYearBasisResult
     * @return \Economic\Subscription_GetCalendarYearBasisResponse
     */
    public function setSubscription_GetCalendarYearBasisResult($Subscription_GetCalendarYearBasisResult)
    {
      $this->Subscription_GetCalendarYearBasisResult = $Subscription_GetCalendarYearBasisResult;
      return $this;
    }

}
