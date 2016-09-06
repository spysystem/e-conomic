<?php

namespace Economic;

class CurrentInvoice_GetExchangeRateResponse
{

    /**
     * @var float $CurrentInvoice_GetExchangeRateResult
     */
    protected $CurrentInvoice_GetExchangeRateResult = null;

    /**
     * @param float $CurrentInvoice_GetExchangeRateResult
     */
    public function __construct($CurrentInvoice_GetExchangeRateResult)
    {
      $this->CurrentInvoice_GetExchangeRateResult = $CurrentInvoice_GetExchangeRateResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetExchangeRateResult()
    {
      return $this->CurrentInvoice_GetExchangeRateResult;
    }

    /**
     * @param float $CurrentInvoice_GetExchangeRateResult
     * @return \Economic\CurrentInvoice_GetExchangeRateResponse
     */
    public function setCurrentInvoice_GetExchangeRateResult($CurrentInvoice_GetExchangeRateResult)
    {
      $this->CurrentInvoice_GetExchangeRateResult = $CurrentInvoice_GetExchangeRateResult;
      return $this;
    }

}
