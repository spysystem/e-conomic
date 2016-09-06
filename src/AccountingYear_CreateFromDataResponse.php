<?php

namespace Economic;

class AccountingYear_CreateFromDataResponse
{

    /**
     * @var AccountingYearHandle $AccountingYear_CreateFromDataResult
     */
    protected $AccountingYear_CreateFromDataResult = null;

    /**
     * @param AccountingYearHandle $AccountingYear_CreateFromDataResult
     */
    public function __construct($AccountingYear_CreateFromDataResult)
    {
      $this->AccountingYear_CreateFromDataResult = $AccountingYear_CreateFromDataResult;
    }

    /**
     * @return AccountingYearHandle
     */
    public function getAccountingYear_CreateFromDataResult()
    {
      return $this->AccountingYear_CreateFromDataResult;
    }

    /**
     * @param AccountingYearHandle $AccountingYear_CreateFromDataResult
     * @return \Economic\AccountingYear_CreateFromDataResponse
     */
    public function setAccountingYear_CreateFromDataResult($AccountingYear_CreateFromDataResult)
    {
      $this->AccountingYear_CreateFromDataResult = $AccountingYear_CreateFromDataResult;
      return $this;
    }

}
