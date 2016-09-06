<?php

namespace Economic;

class AccountingYear_GetAllResponse
{

    /**
     * @var ArrayOfAccountingYearHandle $AccountingYear_GetAllResult
     */
    protected $AccountingYear_GetAllResult = null;

    /**
     * @param ArrayOfAccountingYearHandle $AccountingYear_GetAllResult
     */
    public function __construct($AccountingYear_GetAllResult)
    {
      $this->AccountingYear_GetAllResult = $AccountingYear_GetAllResult;
    }

    /**
     * @return ArrayOfAccountingYearHandle
     */
    public function getAccountingYear_GetAllResult()
    {
      return $this->AccountingYear_GetAllResult;
    }

    /**
     * @param ArrayOfAccountingYearHandle $AccountingYear_GetAllResult
     * @return \Economic\AccountingYear_GetAllResponse
     */
    public function setAccountingYear_GetAllResult($AccountingYear_GetAllResult)
    {
      $this->AccountingYear_GetAllResult = $AccountingYear_GetAllResult;
      return $this;
    }

}
