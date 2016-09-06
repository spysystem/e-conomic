<?php

namespace Economic;

class AccountingYear_GetPeriodsResponse
{

    /**
     * @var ArrayOfAccountingPeriodHandle $AccountingYear_GetPeriodsResult
     */
    protected $AccountingYear_GetPeriodsResult = null;

    /**
     * @param ArrayOfAccountingPeriodHandle $AccountingYear_GetPeriodsResult
     */
    public function __construct($AccountingYear_GetPeriodsResult)
    {
      $this->AccountingYear_GetPeriodsResult = $AccountingYear_GetPeriodsResult;
    }

    /**
     * @return ArrayOfAccountingPeriodHandle
     */
    public function getAccountingYear_GetPeriodsResult()
    {
      return $this->AccountingYear_GetPeriodsResult;
    }

    /**
     * @param ArrayOfAccountingPeriodHandle $AccountingYear_GetPeriodsResult
     * @return \Economic\AccountingYear_GetPeriodsResponse
     */
    public function setAccountingYear_GetPeriodsResult($AccountingYear_GetPeriodsResult)
    {
      $this->AccountingYear_GetPeriodsResult = $AccountingYear_GetPeriodsResult;
      return $this;
    }

}
