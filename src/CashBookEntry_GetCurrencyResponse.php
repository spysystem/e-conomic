<?php

namespace Economic;

class CashBookEntry_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $CashBookEntry_GetCurrencyResult
     */
    protected $CashBookEntry_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $CashBookEntry_GetCurrencyResult
     */
    public function __construct($CashBookEntry_GetCurrencyResult)
    {
      $this->CashBookEntry_GetCurrencyResult = $CashBookEntry_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCashBookEntry_GetCurrencyResult()
    {
      return $this->CashBookEntry_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $CashBookEntry_GetCurrencyResult
     * @return \Economic\CashBookEntry_GetCurrencyResponse
     */
    public function setCashBookEntry_GetCurrencyResult($CashBookEntry_GetCurrencyResult)
    {
      $this->CashBookEntry_GetCurrencyResult = $CashBookEntry_GetCurrencyResult;
      return $this;
    }

}
