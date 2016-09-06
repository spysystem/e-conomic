<?php

namespace Economic;

class AccountingPeriod_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfAccountingPeriodHandle $AccountingPeriod_GetAllUpdatedResult
     */
    protected $AccountingPeriod_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfAccountingPeriodHandle $AccountingPeriod_GetAllUpdatedResult
     */
    public function __construct($AccountingPeriod_GetAllUpdatedResult)
    {
      $this->AccountingPeriod_GetAllUpdatedResult = $AccountingPeriod_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfAccountingPeriodHandle
     */
    public function getAccountingPeriod_GetAllUpdatedResult()
    {
      return $this->AccountingPeriod_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfAccountingPeriodHandle $AccountingPeriod_GetAllUpdatedResult
     * @return \Economic\AccountingPeriod_GetAllUpdatedResponse
     */
    public function setAccountingPeriod_GetAllUpdatedResult($AccountingPeriod_GetAllUpdatedResult)
    {
      $this->AccountingPeriod_GetAllUpdatedResult = $AccountingPeriod_GetAllUpdatedResult;
      return $this;
    }

}
