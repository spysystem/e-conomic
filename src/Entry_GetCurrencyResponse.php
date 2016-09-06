<?php

namespace Economic;

class Entry_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $Entry_GetCurrencyResult
     */
    protected $Entry_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $Entry_GetCurrencyResult
     */
    public function __construct($Entry_GetCurrencyResult)
    {
      $this->Entry_GetCurrencyResult = $Entry_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getEntry_GetCurrencyResult()
    {
      return $this->Entry_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $Entry_GetCurrencyResult
     * @return \Economic\Entry_GetCurrencyResponse
     */
    public function setEntry_GetCurrencyResult($Entry_GetCurrencyResult)
    {
      $this->Entry_GetCurrencyResult = $Entry_GetCurrencyResult;
      return $this;
    }

}
