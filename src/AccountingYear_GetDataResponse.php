<?php

namespace Economic;

class AccountingYear_GetDataResponse
{

    /**
     * @var AccountingYearData $AccountingYear_GetDataResult
     */
    protected $AccountingYear_GetDataResult = null;

    /**
     * @param AccountingYearData $AccountingYear_GetDataResult
     */
    public function __construct($AccountingYear_GetDataResult)
    {
      $this->AccountingYear_GetDataResult = $AccountingYear_GetDataResult;
    }

    /**
     * @return AccountingYearData
     */
    public function getAccountingYear_GetDataResult()
    {
      return $this->AccountingYear_GetDataResult;
    }

    /**
     * @param AccountingYearData $AccountingYear_GetDataResult
     * @return \Economic\AccountingYear_GetDataResponse
     */
    public function setAccountingYear_GetDataResult($AccountingYear_GetDataResult)
    {
      $this->AccountingYear_GetDataResult = $AccountingYear_GetDataResult;
      return $this;
    }

}
