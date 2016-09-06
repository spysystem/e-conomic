<?php

namespace Economic;

class CurrentInvoice_BookResponse
{

    /**
     * @var InvoiceHandle $CurrentInvoice_BookResult
     */
    protected $CurrentInvoice_BookResult = null;

    /**
     * @param InvoiceHandle $CurrentInvoice_BookResult
     */
    public function __construct($CurrentInvoice_BookResult)
    {
      $this->CurrentInvoice_BookResult = $CurrentInvoice_BookResult;
    }

    /**
     * @return InvoiceHandle
     */
    public function getCurrentInvoice_BookResult()
    {
      return $this->CurrentInvoice_BookResult;
    }

    /**
     * @param InvoiceHandle $CurrentInvoice_BookResult
     * @return \Economic\CurrentInvoice_BookResponse
     */
    public function setCurrentInvoice_BookResult($CurrentInvoice_BookResult)
    {
      $this->CurrentInvoice_BookResult = $CurrentInvoice_BookResult;
      return $this;
    }

}
