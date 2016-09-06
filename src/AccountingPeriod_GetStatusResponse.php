<?php

namespace Economic;

class AccountingPeriod_GetStatusResponse
{

    /**
     * @var AccountingPeriodStatus $AccountingPeriod_GetStatusResult
     */
    protected $AccountingPeriod_GetStatusResult = null;

    /**
     * @param AccountingPeriodStatus $AccountingPeriod_GetStatusResult
     */
    public function __construct($AccountingPeriod_GetStatusResult)
    {
      $this->AccountingPeriod_GetStatusResult = $AccountingPeriod_GetStatusResult;
    }

    /**
     * @return AccountingPeriodStatus
     */
    public function getAccountingPeriod_GetStatusResult()
    {
      return $this->AccountingPeriod_GetStatusResult;
    }

    /**
     * @param AccountingPeriodStatus $AccountingPeriod_GetStatusResult
     * @return \Economic\AccountingPeriod_GetStatusResponse
     */
    public function setAccountingPeriod_GetStatusResult($AccountingPeriod_GetStatusResult)
    {
      $this->AccountingPeriod_GetStatusResult = $AccountingPeriod_GetStatusResult;
      return $this;
    }

}
