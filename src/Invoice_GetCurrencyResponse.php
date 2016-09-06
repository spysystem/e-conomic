<?php

namespace Economic;

class Invoice_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $Invoice_GetCurrencyResult
     */
    protected $Invoice_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $Invoice_GetCurrencyResult
     */
    public function __construct($Invoice_GetCurrencyResult)
    {
      $this->Invoice_GetCurrencyResult = $Invoice_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getInvoice_GetCurrencyResult()
    {
      return $this->Invoice_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $Invoice_GetCurrencyResult
     * @return \Economic\Invoice_GetCurrencyResponse
     */
    public function setInvoice_GetCurrencyResult($Invoice_GetCurrencyResult)
    {
      $this->Invoice_GetCurrencyResult = $Invoice_GetCurrencyResult;
      return $this;
    }

}
