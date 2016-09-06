<?php

namespace Economic;

class InvoiceLine_GetVatAmountResponse
{

    /**
     * @var float $InvoiceLine_GetVatAmountResult
     */
    protected $InvoiceLine_GetVatAmountResult = null;

    /**
     * @param float $InvoiceLine_GetVatAmountResult
     */
    public function __construct($InvoiceLine_GetVatAmountResult)
    {
      $this->InvoiceLine_GetVatAmountResult = $InvoiceLine_GetVatAmountResult;
    }

    /**
     * @return float
     */
    public function getInvoiceLine_GetVatAmountResult()
    {
      return $this->InvoiceLine_GetVatAmountResult;
    }

    /**
     * @param float $InvoiceLine_GetVatAmountResult
     * @return \Economic\InvoiceLine_GetVatAmountResponse
     */
    public function setInvoiceLine_GetVatAmountResult($InvoiceLine_GetVatAmountResult)
    {
      $this->InvoiceLine_GetVatAmountResult = $InvoiceLine_GetVatAmountResult;
      return $this;
    }

}
