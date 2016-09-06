<?php

namespace Economic;

class DebtorEntry_GetRemainderDefaultCurrencyResponse
{

    /**
     * @var float $DebtorEntry_GetRemainderDefaultCurrencyResult
     */
    protected $DebtorEntry_GetRemainderDefaultCurrencyResult = null;

    /**
     * @param float $DebtorEntry_GetRemainderDefaultCurrencyResult
     */
    public function __construct($DebtorEntry_GetRemainderDefaultCurrencyResult)
    {
      $this->DebtorEntry_GetRemainderDefaultCurrencyResult = $DebtorEntry_GetRemainderDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getDebtorEntry_GetRemainderDefaultCurrencyResult()
    {
      return $this->DebtorEntry_GetRemainderDefaultCurrencyResult;
    }

    /**
     * @param float $DebtorEntry_GetRemainderDefaultCurrencyResult
     * @return \Economic\DebtorEntry_GetRemainderDefaultCurrencyResponse
     */
    public function setDebtorEntry_GetRemainderDefaultCurrencyResult($DebtorEntry_GetRemainderDefaultCurrencyResult)
    {
      $this->DebtorEntry_GetRemainderDefaultCurrencyResult = $DebtorEntry_GetRemainderDefaultCurrencyResult;
      return $this;
    }

}
