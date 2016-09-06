<?php

namespace Economic;

class CashBookEntry_GetAmountDefaultCurrencyResponse
{

    /**
     * @var float $CashBookEntry_GetAmountDefaultCurrencyResult
     */
    protected $CashBookEntry_GetAmountDefaultCurrencyResult = null;

    /**
     * @param float $CashBookEntry_GetAmountDefaultCurrencyResult
     */
    public function __construct($CashBookEntry_GetAmountDefaultCurrencyResult)
    {
      $this->CashBookEntry_GetAmountDefaultCurrencyResult = $CashBookEntry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getCashBookEntry_GetAmountDefaultCurrencyResult()
    {
      return $this->CashBookEntry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @param float $CashBookEntry_GetAmountDefaultCurrencyResult
     * @return \Economic\CashBookEntry_GetAmountDefaultCurrencyResponse
     */
    public function setCashBookEntry_GetAmountDefaultCurrencyResult($CashBookEntry_GetAmountDefaultCurrencyResult)
    {
      $this->CashBookEntry_GetAmountDefaultCurrencyResult = $CashBookEntry_GetAmountDefaultCurrencyResult;
      return $this;
    }

}
