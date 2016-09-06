<?php

namespace Economic;

class Subscriber_GetDebtorResponse
{

    /**
     * @var DebtorHandle $Subscriber_GetDebtorResult
     */
    protected $Subscriber_GetDebtorResult = null;

    /**
     * @param DebtorHandle $Subscriber_GetDebtorResult
     */
    public function __construct($Subscriber_GetDebtorResult)
    {
      $this->Subscriber_GetDebtorResult = $Subscriber_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getSubscriber_GetDebtorResult()
    {
      return $this->Subscriber_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $Subscriber_GetDebtorResult
     * @return \Economic\Subscriber_GetDebtorResponse
     */
    public function setSubscriber_GetDebtorResult($Subscriber_GetDebtorResult)
    {
      $this->Subscriber_GetDebtorResult = $Subscriber_GetDebtorResult;
      return $this;
    }

}
