<?php

namespace Economic;

class DebtorEntry_GetAmountDefaultCurrencyResponse
{

    /**
     * @var float $DebtorEntry_GetAmountDefaultCurrencyResult
     */
    protected $DebtorEntry_GetAmountDefaultCurrencyResult = null;

    /**
     * @param float $DebtorEntry_GetAmountDefaultCurrencyResult
     */
    public function __construct($DebtorEntry_GetAmountDefaultCurrencyResult)
    {
      $this->DebtorEntry_GetAmountDefaultCurrencyResult = $DebtorEntry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getDebtorEntry_GetAmountDefaultCurrencyResult()
    {
      return $this->DebtorEntry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @param float $DebtorEntry_GetAmountDefaultCurrencyResult
     * @return \Economic\DebtorEntry_GetAmountDefaultCurrencyResponse
     */
    public function setDebtorEntry_GetAmountDefaultCurrencyResult($DebtorEntry_GetAmountDefaultCurrencyResult)
    {
      $this->DebtorEntry_GetAmountDefaultCurrencyResult = $DebtorEntry_GetAmountDefaultCurrencyResult;
      return $this;
    }

}
