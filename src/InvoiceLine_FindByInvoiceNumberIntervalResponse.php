<?php

namespace Economic;

class InvoiceLine_FindByInvoiceNumberIntervalResponse
{

    /**
     * @var ArrayOfInvoiceLineHandle $InvoiceLine_FindByInvoiceNumberIntervalResult
     */
    protected $InvoiceLine_FindByInvoiceNumberIntervalResult = null;

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByInvoiceNumberIntervalResult
     */
    public function __construct($InvoiceLine_FindByInvoiceNumberIntervalResult)
    {
      $this->InvoiceLine_FindByInvoiceNumberIntervalResult = $InvoiceLine_FindByInvoiceNumberIntervalResult;
    }

    /**
     * @return ArrayOfInvoiceLineHandle
     */
    public function getInvoiceLine_FindByInvoiceNumberIntervalResult()
    {
      return $this->InvoiceLine_FindByInvoiceNumberIntervalResult;
    }

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByInvoiceNumberIntervalResult
     * @return \Economic\InvoiceLine_FindByInvoiceNumberIntervalResponse
     */
    public function setInvoiceLine_FindByInvoiceNumberIntervalResult($InvoiceLine_FindByInvoiceNumberIntervalResult)
    {
      $this->InvoiceLine_FindByInvoiceNumberIntervalResult = $InvoiceLine_FindByInvoiceNumberIntervalResult;
      return $this;
    }

}
