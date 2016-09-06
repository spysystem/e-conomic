<?php

namespace Economic;

class CreditorEntry_GetAmountDefaultCurrencyResponse
{

    /**
     * @var float $CreditorEntry_GetAmountDefaultCurrencyResult
     */
    protected $CreditorEntry_GetAmountDefaultCurrencyResult = null;

    /**
     * @param float $CreditorEntry_GetAmountDefaultCurrencyResult
     */
    public function __construct($CreditorEntry_GetAmountDefaultCurrencyResult)
    {
      $this->CreditorEntry_GetAmountDefaultCurrencyResult = $CreditorEntry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getCreditorEntry_GetAmountDefaultCurrencyResult()
    {
      return $this->CreditorEntry_GetAmountDefaultCurrencyResult;
    }

    /**
     * @param float $CreditorEntry_GetAmountDefaultCurrencyResult
     * @return \Economic\CreditorEntry_GetAmountDefaultCurrencyResponse
     */
    public function setCreditorEntry_GetAmountDefaultCurrencyResult($CreditorEntry_GetAmountDefaultCurrencyResult)
    {
      $this->CreditorEntry_GetAmountDefaultCurrencyResult = $CreditorEntry_GetAmountDefaultCurrencyResult;
      return $this;
    }

}
