<?php

namespace Economic;

class AccountingYear_GetYearResponse
{

    /**
     * @var string $AccountingYear_GetYearResult
     */
    protected $AccountingYear_GetYearResult = null;

    /**
     * @param string $AccountingYear_GetYearResult
     */
    public function __construct($AccountingYear_GetYearResult)
    {
      $this->AccountingYear_GetYearResult = $AccountingYear_GetYearResult;
    }

    /**
     * @return string
     */
    public function getAccountingYear_GetYearResult()
    {
      return $this->AccountingYear_GetYearResult;
    }

    /**
     * @param string $AccountingYear_GetYearResult
     * @return \Economic\AccountingYear_GetYearResponse
     */
    public function setAccountingYear_GetYearResult($AccountingYear_GetYearResult)
    {
      $this->AccountingYear_GetYearResult = $AccountingYear_GetYearResult;
      return $this;
    }

}
