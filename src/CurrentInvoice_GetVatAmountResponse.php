<?php

namespace Economic;

class CurrentInvoice_GetVatAmountResponse
{

    /**
     * @var float $CurrentInvoice_GetVatAmountResult
     */
    protected $CurrentInvoice_GetVatAmountResult = null;

    /**
     * @param float $CurrentInvoice_GetVatAmountResult
     */
    public function __construct($CurrentInvoice_GetVatAmountResult)
    {
      $this->CurrentInvoice_GetVatAmountResult = $CurrentInvoice_GetVatAmountResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetVatAmountResult()
    {
      return $this->CurrentInvoice_GetVatAmountResult;
    }

    /**
     * @param float $CurrentInvoice_GetVatAmountResult
     * @return \Economic\CurrentInvoice_GetVatAmountResponse
     */
    public function setCurrentInvoice_GetVatAmountResult($CurrentInvoice_GetVatAmountResult)
    {
      $this->CurrentInvoice_GetVatAmountResult = $CurrentInvoice_GetVatAmountResult;
      return $this;
    }

}
