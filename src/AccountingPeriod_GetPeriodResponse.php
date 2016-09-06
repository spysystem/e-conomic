<?php

namespace Economic;

class AccountingPeriod_GetPeriodResponse
{

    /**
     * @var int $AccountingPeriod_GetPeriodResult
     */
    protected $AccountingPeriod_GetPeriodResult = null;

    /**
     * @param int $AccountingPeriod_GetPeriodResult
     */
    public function __construct($AccountingPeriod_GetPeriodResult)
    {
      $this->AccountingPeriod_GetPeriodResult = $AccountingPeriod_GetPeriodResult;
    }

    /**
     * @return int
     */
    public function getAccountingPeriod_GetPeriodResult()
    {
      return $this->AccountingPeriod_GetPeriodResult;
    }

    /**
     * @param int $AccountingPeriod_GetPeriodResult
     * @return \Economic\AccountingPeriod_GetPeriodResponse
     */
    public function setAccountingPeriod_GetPeriodResult($AccountingPeriod_GetPeriodResult)
    {
      $this->AccountingPeriod_GetPeriodResult = $AccountingPeriod_GetPeriodResult;
      return $this;
    }

}
