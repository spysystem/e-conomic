<?php

namespace Economic;

class AccountingYear_GetDataArrayResponse
{

    /**
     * @var ArrayOfAccountingYearData $AccountingYear_GetDataArrayResult
     */
    protected $AccountingYear_GetDataArrayResult = null;

    /**
     * @param ArrayOfAccountingYearData $AccountingYear_GetDataArrayResult
     */
    public function __construct($AccountingYear_GetDataArrayResult)
    {
      $this->AccountingYear_GetDataArrayResult = $AccountingYear_GetDataArrayResult;
    }

    /**
     * @return ArrayOfAccountingYearData
     */
    public function getAccountingYear_GetDataArrayResult()
    {
      return $this->AccountingYear_GetDataArrayResult;
    }

    /**
     * @param ArrayOfAccountingYearData $AccountingYear_GetDataArrayResult
     * @return \Economic\AccountingYear_GetDataArrayResponse
     */
    public function setAccountingYear_GetDataArrayResult($AccountingYear_GetDataArrayResult)
    {
      $this->AccountingYear_GetDataArrayResult = $AccountingYear_GetDataArrayResult;
      return $this;
    }

}
