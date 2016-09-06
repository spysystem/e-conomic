<?php

namespace Economic;

class InvoiceLine_GetInvoiceResponse
{

    /**
     * @var InvoiceHandle $InvoiceLine_GetInvoiceResult
     */
    protected $InvoiceLine_GetInvoiceResult = null;

    /**
     * @param InvoiceHandle $InvoiceLine_GetInvoiceResult
     */
    public function __construct($InvoiceLine_GetInvoiceResult)
    {
      $this->InvoiceLine_GetInvoiceResult = $InvoiceLine_GetInvoiceResult;
    }

    /**
     * @return InvoiceHandle
     */
    public function getInvoiceLine_GetInvoiceResult()
    {
      return $this->InvoiceLine_GetInvoiceResult;
    }

    /**
     * @param InvoiceHandle $InvoiceLine_GetInvoiceResult
     * @return \Economic\InvoiceLine_GetInvoiceResponse
     */
    public function setInvoiceLine_GetInvoiceResult($InvoiceLine_GetInvoiceResult)
    {
      $this->InvoiceLine_GetInvoiceResult = $InvoiceLine_GetInvoiceResult;
      return $this;
    }

}
