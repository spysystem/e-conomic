<?php

namespace Economic;

class AccountingPeriod_GetAccountingYearResponse
{

    /**
     * @var AccountingYearHandle $AccountingPeriod_GetAccountingYearResult
     */
    protected $AccountingPeriod_GetAccountingYearResult = null;

    /**
     * @param AccountingYearHandle $AccountingPeriod_GetAccountingYearResult
     */
    public function __construct($AccountingPeriod_GetAccountingYearResult)
    {
      $this->AccountingPeriod_GetAccountingYearResult = $AccountingPeriod_GetAccountingYearResult;
    }

    /**
     * @return AccountingYearHandle
     */
    public function getAccountingPeriod_GetAccountingYearResult()
    {
      return $this->AccountingPeriod_GetAccountingYearResult;
    }

    /**
     * @param AccountingYearHandle $AccountingPeriod_GetAccountingYearResult
     * @return \Economic\AccountingPeriod_GetAccountingYearResponse
     */
    public function setAccountingPeriod_GetAccountingYearResult($AccountingPeriod_GetAccountingYearResult)
    {
      $this->AccountingPeriod_GetAccountingYearResult = $AccountingPeriod_GetAccountingYearResult;
      return $this;
    }

}
