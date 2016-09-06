<?php

namespace Economic;

class Invoice_GetRemainderDefaultCurrencyResponse
{

    /**
     * @var float $Invoice_GetRemainderDefaultCurrencyResult
     */
    protected $Invoice_GetRemainderDefaultCurrencyResult = null;

    /**
     * @param float $Invoice_GetRemainderDefaultCurrencyResult
     */
    public function __construct($Invoice_GetRemainderDefaultCurrencyResult)
    {
      $this->Invoice_GetRemainderDefaultCurrencyResult = $Invoice_GetRemainderDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetRemainderDefaultCurrencyResult()
    {
      return $this->Invoice_GetRemainderDefaultCurrencyResult;
    }

    /**
     * @param float $Invoice_GetRemainderDefaultCurrencyResult
     * @return \Economic\Invoice_GetRemainderDefaultCurrencyResponse
     */
    public function setInvoice_GetRemainderDefaultCurrencyResult($Invoice_GetRemainderDefaultCurrencyResult)
    {
      $this->Invoice_GetRemainderDefaultCurrencyResult = $Invoice_GetRemainderDefaultCurrencyResult;
      return $this;
    }

}
