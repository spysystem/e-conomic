<?php

namespace Economic;

class AccountingPeriod_GetAllResponse
{

    /**
     * @var ArrayOfAccountingPeriodHandle $AccountingPeriod_GetAllResult
     */
    protected $AccountingPeriod_GetAllResult = null;

    /**
     * @param ArrayOfAccountingPeriodHandle $AccountingPeriod_GetAllResult
     */
    public function __construct($AccountingPeriod_GetAllResult)
    {
      $this->AccountingPeriod_GetAllResult = $AccountingPeriod_GetAllResult;
    }

    /**
     * @return ArrayOfAccountingPeriodHandle
     */
    public function getAccountingPeriod_GetAllResult()
    {
      return $this->AccountingPeriod_GetAllResult;
    }

    /**
     * @param ArrayOfAccountingPeriodHandle $AccountingPeriod_GetAllResult
     * @return \Economic\AccountingPeriod_GetAllResponse
     */
    public function setAccountingPeriod_GetAllResult($AccountingPeriod_GetAllResult)
    {
      $this->AccountingPeriod_GetAllResult = $AccountingPeriod_GetAllResult;
      return $this;
    }

}
