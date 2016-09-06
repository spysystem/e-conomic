<?php

namespace Economic;

class AccountingYear_GetIsClosed
{

    /**
     * @var AccountingYearHandle $accountingYearHandle
     */
    protected $accountingYearHandle = null;

    /**
     * @param AccountingYearHandle $accountingYearHandle
     */
    public function __construct($accountingYearHandle)
    {
      $this->accountingYearHandle = $accountingYearHandle;
    }

    /**
     * @return AccountingYearHandle
     */
    public function getAccountingYearHandle()
    {
      return $this->accountingYearHandle;
    }

    /**
     * @param AccountingYearHandle $accountingYearHandle
     * @return \Economic\AccountingYear_GetIsClosed
     */
    public function setAccountingYearHandle($accountingYearHandle)
    {
      $this->accountingYearHandle = $accountingYearHandle;
      return $this;
    }

}
