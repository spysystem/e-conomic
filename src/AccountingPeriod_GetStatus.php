<?php

namespace Economic;

class AccountingPeriod_GetStatus
{

    /**
     * @var AccountingPeriodHandle $accountingPeriodHandle
     */
    protected $accountingPeriodHandle = null;

    /**
     * @param AccountingPeriodHandle $accountingPeriodHandle
     */
    public function __construct($accountingPeriodHandle)
    {
      $this->accountingPeriodHandle = $accountingPeriodHandle;
    }

    /**
     * @return AccountingPeriodHandle
     */
    public function getAccountingPeriodHandle()
    {
      return $this->accountingPeriodHandle;
    }

    /**
     * @param AccountingPeriodHandle $accountingPeriodHandle
     * @return \Economic\AccountingPeriod_GetStatus
     */
    public function setAccountingPeriodHandle($accountingPeriodHandle)
    {
      $this->accountingPeriodHandle = $accountingPeriodHandle;
      return $this;
    }

}
