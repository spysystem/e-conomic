<?php

namespace Economic;

class CreditorEntry_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $CreditorEntry_GetCurrencyResult
     */
    protected $CreditorEntry_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $CreditorEntry_GetCurrencyResult
     */
    public function __construct($CreditorEntry_GetCurrencyResult)
    {
      $this->CreditorEntry_GetCurrencyResult = $CreditorEntry_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCreditorEntry_GetCurrencyResult()
    {
      return $this->CreditorEntry_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $CreditorEntry_GetCurrencyResult
     * @return \Economic\CreditorEntry_GetCurrencyResponse
     */
    public function setCreditorEntry_GetCurrencyResult($CreditorEntry_GetCurrencyResult)
    {
      $this->CreditorEntry_GetCurrencyResult = $CreditorEntry_GetCurrencyResult;
      return $this;
    }

}
