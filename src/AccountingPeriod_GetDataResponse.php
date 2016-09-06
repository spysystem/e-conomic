<?php

namespace Economic;

class AccountingPeriod_GetDataResponse
{

    /**
     * @var AccountingPeriodData $AccountingPeriod_GetDataResult
     */
    protected $AccountingPeriod_GetDataResult = null;

    /**
     * @param AccountingPeriodData $AccountingPeriod_GetDataResult
     */
    public function __construct($AccountingPeriod_GetDataResult)
    {
      $this->AccountingPeriod_GetDataResult = $AccountingPeriod_GetDataResult;
    }

    /**
     * @return AccountingPeriodData
     */
    public function getAccountingPeriod_GetDataResult()
    {
      return $this->AccountingPeriod_GetDataResult;
    }

    /**
     * @param AccountingPeriodData $AccountingPeriod_GetDataResult
     * @return \Economic\AccountingPeriod_GetDataResponse
     */
    public function setAccountingPeriod_GetDataResult($AccountingPeriod_GetDataResult)
    {
      $this->AccountingPeriod_GetDataResult = $AccountingPeriod_GetDataResult;
      return $this;
    }

}
