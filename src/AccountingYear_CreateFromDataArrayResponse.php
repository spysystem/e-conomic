<?php

namespace Economic;

class AccountingYear_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfAccountingYearHandle $AccountingYear_CreateFromDataArrayResult
     */
    protected $AccountingYear_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfAccountingYearHandle $AccountingYear_CreateFromDataArrayResult
     */
    public function __construct($AccountingYear_CreateFromDataArrayResult)
    {
      $this->AccountingYear_CreateFromDataArrayResult = $AccountingYear_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfAccountingYearHandle
     */
    public function getAccountingYear_CreateFromDataArrayResult()
    {
      return $this->AccountingYear_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfAccountingYearHandle $AccountingYear_CreateFromDataArrayResult
     * @return \Economic\AccountingYear_CreateFromDataArrayResponse
     */
    public function setAccountingYear_CreateFromDataArrayResult($AccountingYear_CreateFromDataArrayResult)
    {
      $this->AccountingYear_CreateFromDataArrayResult = $AccountingYear_CreateFromDataArrayResult;
      return $this;
    }

}
