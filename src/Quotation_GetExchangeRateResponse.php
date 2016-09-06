<?php

namespace Economic;

class Quotation_GetExchangeRateResponse
{

    /**
     * @var float $Quotation_GetExchangeRateResult
     */
    protected $Quotation_GetExchangeRateResult = null;

    /**
     * @param float $Quotation_GetExchangeRateResult
     */
    public function __construct($Quotation_GetExchangeRateResult)
    {
      $this->Quotation_GetExchangeRateResult = $Quotation_GetExchangeRateResult;
    }

    /**
     * @return float
     */
    public function getQuotation_GetExchangeRateResult()
    {
      return $this->Quotation_GetExchangeRateResult;
    }

    /**
     * @param float $Quotation_GetExchangeRateResult
     * @return \Economic\Quotation_GetExchangeRateResponse
     */
    public function setQuotation_GetExchangeRateResult($Quotation_GetExchangeRateResult)
    {
      $this->Quotation_GetExchangeRateResult = $Quotation_GetExchangeRateResult;
      return $this;
    }

}
