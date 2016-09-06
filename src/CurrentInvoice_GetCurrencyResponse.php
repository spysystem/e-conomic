<?php

namespace Economic;

class CurrentInvoice_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $CurrentInvoice_GetCurrencyResult
     */
    protected $CurrentInvoice_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $CurrentInvoice_GetCurrencyResult
     */
    public function __construct($CurrentInvoice_GetCurrencyResult)
    {
      $this->CurrentInvoice_GetCurrencyResult = $CurrentInvoice_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCurrentInvoice_GetCurrencyResult()
    {
      return $this->CurrentInvoice_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $CurrentInvoice_GetCurrencyResult
     * @return \Economic\CurrentInvoice_GetCurrencyResponse
     */
    public function setCurrentInvoice_GetCurrencyResult($CurrentInvoice_GetCurrencyResult)
    {
      $this->CurrentInvoice_GetCurrencyResult = $CurrentInvoice_GetCurrencyResult;
      return $this;
    }

}
