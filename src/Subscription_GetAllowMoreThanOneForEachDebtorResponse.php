<?php

namespace Economic;

class Subscription_GetAllowMoreThanOneForEachDebtorResponse
{

    /**
     * @var boolean $Subscription_GetAllowMoreThanOneForEachDebtorResult
     */
    protected $Subscription_GetAllowMoreThanOneForEachDebtorResult = null;

    /**
     * @param boolean $Subscription_GetAllowMoreThanOneForEachDebtorResult
     */
    public function __construct($Subscription_GetAllowMoreThanOneForEachDebtorResult)
    {
      $this->Subscription_GetAllowMoreThanOneForEachDebtorResult = $Subscription_GetAllowMoreThanOneForEachDebtorResult;
    }

    /**
     * @return boolean
     */
    public function getSubscription_GetAllowMoreThanOneForEachDebtorResult()
    {
      return $this->Subscription_GetAllowMoreThanOneForEachDebtorResult;
    }

    /**
     * @param boolean $Subscription_GetAllowMoreThanOneForEachDebtorResult
     * @return \Economic\Subscription_GetAllowMoreThanOneForEachDebtorResponse
     */
    public function setSubscription_GetAllowMoreThanOneForEachDebtorResult($Subscription_GetAllowMoreThanOneForEachDebtorResult)
    {
      $this->Subscription_GetAllowMoreThanOneForEachDebtorResult = $Subscription_GetAllowMoreThanOneForEachDebtorResult;
      return $this;
    }

}
