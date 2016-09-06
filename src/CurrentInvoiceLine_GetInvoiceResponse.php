<?php

namespace Economic;

class CurrentInvoiceLine_GetInvoiceResponse
{

    /**
     * @var CurrentInvoiceHandle $CurrentInvoiceLine_GetInvoiceResult
     */
    protected $CurrentInvoiceLine_GetInvoiceResult = null;

    /**
     * @param CurrentInvoiceHandle $CurrentInvoiceLine_GetInvoiceResult
     */
    public function __construct($CurrentInvoiceLine_GetInvoiceResult)
    {
      $this->CurrentInvoiceLine_GetInvoiceResult = $CurrentInvoiceLine_GetInvoiceResult;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getCurrentInvoiceLine_GetInvoiceResult()
    {
      return $this->CurrentInvoiceLine_GetInvoiceResult;
    }

    /**
     * @param CurrentInvoiceHandle $CurrentInvoiceLine_GetInvoiceResult
     * @return \Economic\CurrentInvoiceLine_GetInvoiceResponse
     */
    public function setCurrentInvoiceLine_GetInvoiceResult($CurrentInvoiceLine_GetInvoiceResult)
    {
      $this->CurrentInvoiceLine_GetInvoiceResult = $CurrentInvoiceLine_GetInvoiceResult;
      return $this;
    }

}
