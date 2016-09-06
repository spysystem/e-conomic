<?php

namespace Economic;

class Debtor_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $Debtor_GetCurrencyResult
     */
    protected $Debtor_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $Debtor_GetCurrencyResult
     */
    public function __construct($Debtor_GetCurrencyResult)
    {
      $this->Debtor_GetCurrencyResult = $Debtor_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getDebtor_GetCurrencyResult()
    {
      return $this->Debtor_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $Debtor_GetCurrencyResult
     * @return \Economic\Debtor_GetCurrencyResponse
     */
    public function setDebtor_GetCurrencyResult($Debtor_GetCurrencyResult)
    {
      $this->Debtor_GetCurrencyResult = $Debtor_GetCurrencyResult;
      return $this;
    }

}
