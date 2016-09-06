<?php

namespace Economic;

class DebtorEntry_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $DebtorEntry_GetCurrencyResult
     */
    protected $DebtorEntry_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $DebtorEntry_GetCurrencyResult
     */
    public function __construct($DebtorEntry_GetCurrencyResult)
    {
      $this->DebtorEntry_GetCurrencyResult = $DebtorEntry_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getDebtorEntry_GetCurrencyResult()
    {
      return $this->DebtorEntry_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $DebtorEntry_GetCurrencyResult
     * @return \Economic\DebtorEntry_GetCurrencyResponse
     */
    public function setDebtorEntry_GetCurrencyResult($DebtorEntry_GetCurrencyResult)
    {
      $this->DebtorEntry_GetCurrencyResult = $DebtorEntry_GetCurrencyResult;
      return $this;
    }

}
