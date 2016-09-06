<?php

namespace Economic;

class AccountingPeriod_GetDataArrayResponse
{

    /**
     * @var ArrayOfAccountingPeriodData $AccountingPeriod_GetDataArrayResult
     */
    protected $AccountingPeriod_GetDataArrayResult = null;

    /**
     * @param ArrayOfAccountingPeriodData $AccountingPeriod_GetDataArrayResult
     */
    public function __construct($AccountingPeriod_GetDataArrayResult)
    {
      $this->AccountingPeriod_GetDataArrayResult = $AccountingPeriod_GetDataArrayResult;
    }

    /**
     * @return ArrayOfAccountingPeriodData
     */
    public function getAccountingPeriod_GetDataArrayResult()
    {
      return $this->AccountingPeriod_GetDataArrayResult;
    }

    /**
     * @param ArrayOfAccountingPeriodData $AccountingPeriod_GetDataArrayResult
     * @return \Economic\AccountingPeriod_GetDataArrayResponse
     */
    public function setAccountingPeriod_GetDataArrayResult($AccountingPeriod_GetDataArrayResult)
    {
      $this->AccountingPeriod_GetDataArrayResult = $AccountingPeriod_GetDataArrayResult;
      return $this;
    }

}
