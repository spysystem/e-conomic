<?php

namespace Economic;

class Creditor_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $Creditor_GetCurrencyResult
     */
    protected $Creditor_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $Creditor_GetCurrencyResult
     */
    public function __construct($Creditor_GetCurrencyResult)
    {
      $this->Creditor_GetCurrencyResult = $Creditor_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCreditor_GetCurrencyResult()
    {
      return $this->Creditor_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $Creditor_GetCurrencyResult
     * @return \Economic\Creditor_GetCurrencyResponse
     */
    public function setCreditor_GetCurrencyResult($Creditor_GetCurrencyResult)
    {
      $this->Creditor_GetCurrencyResult = $Creditor_GetCurrencyResult;
      return $this;
    }

}
