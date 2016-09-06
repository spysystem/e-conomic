<?php

namespace Economic;

class AccountingYear_CreateResponse
{

    /**
     * @var AccountingYearHandle $AccountingYear_CreateResult
     */
    protected $AccountingYear_CreateResult = null;

    /**
     * @param AccountingYearHandle $AccountingYear_CreateResult
     */
    public function __construct($AccountingYear_CreateResult)
    {
      $this->AccountingYear_CreateResult = $AccountingYear_CreateResult;
    }

    /**
     * @return AccountingYearHandle
     */
    public function getAccountingYear_CreateResult()
    {
      return $this->AccountingYear_CreateResult;
    }

    /**
     * @param AccountingYearHandle $AccountingYear_CreateResult
     * @return \Economic\AccountingYear_CreateResponse
     */
    public function setAccountingYear_CreateResult($AccountingYear_CreateResult)
    {
      $this->AccountingYear_CreateResult = $AccountingYear_CreateResult;
      return $this;
    }

}
