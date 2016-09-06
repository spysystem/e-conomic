<?php

namespace Economic;

class AccountingYear_FindByDateResponse
{

    /**
     * @var ArrayOfAccountingYearHandle $AccountingYear_FindByDateResult
     */
    protected $AccountingYear_FindByDateResult = null;

    /**
     * @param ArrayOfAccountingYearHandle $AccountingYear_FindByDateResult
     */
    public function __construct($AccountingYear_FindByDateResult)
    {
      $this->AccountingYear_FindByDateResult = $AccountingYear_FindByDateResult;
    }

    /**
     * @return ArrayOfAccountingYearHandle
     */
    public function getAccountingYear_FindByDateResult()
    {
      return $this->AccountingYear_FindByDateResult;
    }

    /**
     * @param ArrayOfAccountingYearHandle $AccountingYear_FindByDateResult
     * @return \Economic\AccountingYear_FindByDateResponse
     */
    public function setAccountingYear_FindByDateResult($AccountingYear_FindByDateResult)
    {
      $this->AccountingYear_FindByDateResult = $AccountingYear_FindByDateResult;
      return $this;
    }

}
