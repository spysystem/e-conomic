<?php

namespace Economic;

class Entry_GetAmountDefaultCurrencyResponse
{

    /**
     * @var float $Entry_GetAmountDefaultCurrencyResult
     */
    protected $Entry_GetAmountDefaultCurrencyResult = null;

    /**
     * @param float $Entry_GetAmountDefaultCurrencyResult
     */
    public function __construct($Entry_GetAmountDefaultCurrencyResult)
    {
      $this->Entry_GetAmountDefaultCurrencyResult = $Entry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getEntry_GetAmountDefaultCurrencyResult()
    {
      return $this->Entry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @param float $Entry_GetAmountDefaultCurrencyResult
     * @return \Economic\Entry_GetAmountDefaultCurrencyResponse
     */
    public function setEntry_GetAmountDefaultCurrencyResult($Entry_GetAmountDefaultCurrencyResult)
    {
      $this->Entry_GetAmountDefaultCurrencyResult = $Entry_GetAmountDefaultCurrencyResult;
      return $this;
    }

}
