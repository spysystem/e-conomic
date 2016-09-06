<?php

namespace Economic;

class CashBookEntry_GetCreditorResponse
{

    /**
     * @var CreditorHandle $CashBookEntry_GetCreditorResult
     */
    protected $CashBookEntry_GetCreditorResult = null;

    /**
     * @param CreditorHandle $CashBookEntry_GetCreditorResult
     */
    public function __construct($CashBookEntry_GetCreditorResult)
    {
      $this->CashBookEntry_GetCreditorResult = $CashBookEntry_GetCreditorResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCashBookEntry_GetCreditorResult()
    {
      return $this->CashBookEntry_GetCreditorResult;
    }

    /**
     * @param CreditorHandle $CashBookEntry_GetCreditorResult
     * @return \Economic\CashBookEntry_GetCreditorResponse
     */
    public function setCashBookEntry_GetCreditorResult($CashBookEntry_GetCreditorResult)
    {
      $this->CashBookEntry_GetCreditorResult = $CashBookEntry_GetCreditorResult;
      return $this;
    }

}
