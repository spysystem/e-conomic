<?php

namespace Economic;

class Quotation_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $Quotation_GetCurrencyResult
     */
    protected $Quotation_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $Quotation_GetCurrencyResult
     */
    public function __construct($Quotation_GetCurrencyResult)
    {
      $this->Quotation_GetCurrencyResult = $Quotation_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getQuotation_GetCurrencyResult()
    {
      return $this->Quotation_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $Quotation_GetCurrencyResult
     * @return \Economic\Quotation_GetCurrencyResponse
     */
    public function setQuotation_GetCurrencyResult($Quotation_GetCurrencyResult)
    {
      $this->Quotation_GetCurrencyResult = $Quotation_GetCurrencyResult;
      return $this;
    }

}
