<?php

namespace Economic;

class AccountingYear_GetIsClosedResponse
{

    /**
     * @var boolean $AccountingYear_GetIsClosedResult
     */
    protected $AccountingYear_GetIsClosedResult = null;

    /**
     * @param boolean $AccountingYear_GetIsClosedResult
     */
    public function __construct($AccountingYear_GetIsClosedResult)
    {
      $this->AccountingYear_GetIsClosedResult = $AccountingYear_GetIsClosedResult;
    }

    /**
     * @return boolean
     */
    public function getAccountingYear_GetIsClosedResult()
    {
      return $this->AccountingYear_GetIsClosedResult;
    }

    /**
     * @param boolean $AccountingYear_GetIsClosedResult
     * @return \Economic\AccountingYear_GetIsClosedResponse
     */
    public function setAccountingYear_GetIsClosedResult($AccountingYear_GetIsClosedResult)
    {
      $this->AccountingYear_GetIsClosedResult = $AccountingYear_GetIsClosedResult;
      return $this;
    }

}
