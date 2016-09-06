<?php

namespace Economic;

class InvoiceLine_GetVatRateResponse
{

    /**
     * @var float $InvoiceLine_GetVatRateResult
     */
    protected $InvoiceLine_GetVatRateResult = null;

    /**
     * @param float $InvoiceLine_GetVatRateResult
     */
    public function __construct($InvoiceLine_GetVatRateResult)
    {
      $this->InvoiceLine_GetVatRateResult = $InvoiceLine_GetVatRateResult;
    }

    /**
     * @return float
     */
    public function getInvoiceLine_GetVatRateResult()
    {
      return $this->InvoiceLine_GetVatRateResult;
    }

    /**
     * @param float $InvoiceLine_GetVatRateResult
     * @return \Economic\InvoiceLine_GetVatRateResponse
     */
    public function setInvoiceLine_GetVatRateResult($InvoiceLine_GetVatRateResult)
    {
      $this->InvoiceLine_GetVatRateResult = $InvoiceLine_GetVatRateResult;
      return $this;
    }

}
