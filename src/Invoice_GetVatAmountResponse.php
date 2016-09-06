<?php

namespace Economic;

class Invoice_GetVatAmountResponse
{

    /**
     * @var float $Invoice_GetVatAmountResult
     */
    protected $Invoice_GetVatAmountResult = null;

    /**
     * @param float $Invoice_GetVatAmountResult
     */
    public function __construct($Invoice_GetVatAmountResult)
    {
      $this->Invoice_GetVatAmountResult = $Invoice_GetVatAmountResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetVatAmountResult()
    {
      return $this->Invoice_GetVatAmountResult;
    }

    /**
     * @param float $Invoice_GetVatAmountResult
     * @return \Economic\Invoice_GetVatAmountResponse
     */
    public function setInvoice_GetVatAmountResult($Invoice_GetVatAmountResult)
    {
      $this->Invoice_GetVatAmountResult = $Invoice_GetVatAmountResult;
      return $this;
    }

}
