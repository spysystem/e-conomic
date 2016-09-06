<?php

namespace Economic;

class Company_GetBaseCurrencyResponse
{

    /**
     * @var CurrencyHandle $Company_GetBaseCurrencyResult
     */
    protected $Company_GetBaseCurrencyResult = null;

    /**
     * @param CurrencyHandle $Company_GetBaseCurrencyResult
     */
    public function __construct($Company_GetBaseCurrencyResult)
    {
      $this->Company_GetBaseCurrencyResult = $Company_GetBaseCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCompany_GetBaseCurrencyResult()
    {
      return $this->Company_GetBaseCurrencyResult;
    }

    /**
     * @param CurrencyHandle $Company_GetBaseCurrencyResult
     * @return \Economic\Company_GetBaseCurrencyResponse
     */
    public function setCompany_GetBaseCurrencyResult($Company_GetBaseCurrencyResult)
    {
      $this->Company_GetBaseCurrencyResult = $Company_GetBaseCurrencyResult;
      return $this;
    }

}
