<?php

namespace Economic;

class CreditorEntry_GetRemainderDefaultCurrencyResponse
{

    /**
     * @var float $CreditorEntry_GetRemainderDefaultCurrencyResult
     */
    protected $CreditorEntry_GetRemainderDefaultCurrencyResult = null;

    /**
     * @param float $CreditorEntry_GetRemainderDefaultCurrencyResult
     */
    public function __construct($CreditorEntry_GetRemainderDefaultCurrencyResult)
    {
      $this->CreditorEntry_GetRemainderDefaultCurrencyResult = $CreditorEntry_GetRemainderDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getCreditorEntry_GetRemainderDefaultCurrencyResult()
    {
      return $this->CreditorEntry_GetRemainderDefaultCurrencyResult;
    }

    /**
     * @param float $CreditorEntry_GetRemainderDefaultCurrencyResult
     * @return \Economic\CreditorEntry_GetRemainderDefaultCurrencyResponse
     */
    public function setCreditorEntry_GetRemainderDefaultCurrencyResult($CreditorEntry_GetRemainderDefaultCurrencyResult)
    {
      $this->CreditorEntry_GetRemainderDefaultCurrencyResult = $CreditorEntry_GetRemainderDefaultCurrencyResult;
      return $this;
    }

}
