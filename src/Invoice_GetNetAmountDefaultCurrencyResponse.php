<?php

namespace Economic;

class Invoice_GetNetAmountDefaultCurrencyResponse
{

    /**
     * @var float $Invoice_GetNetAmountDefaultCurrencyResult
     */
    protected $Invoice_GetNetAmountDefaultCurrencyResult = null;

    /**
     * @param float $Invoice_GetNetAmountDefaultCurrencyResult
     */
    public function __construct($Invoice_GetNetAmountDefaultCurrencyResult)
    {
      $this->Invoice_GetNetAmountDefaultCurrencyResult = $Invoice_GetNetAmountDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetNetAmountDefaultCurrencyResult()
    {
      return $this->Invoice_GetNetAmountDefaultCurrencyResult;
    }

    /**
     * @param float $Invoice_GetNetAmountDefaultCurrencyResult
     * @return \Economic\Invoice_GetNetAmountDefaultCurrencyResponse
     */
    public function setInvoice_GetNetAmountDefaultCurrencyResult($Invoice_GetNetAmountDefaultCurrencyResult)
    {
      $this->Invoice_GetNetAmountDefaultCurrencyResult = $Invoice_GetNetAmountDefaultCurrencyResult;
      return $this;
    }

}
