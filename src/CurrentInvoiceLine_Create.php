<?php

namespace Economic;

class CurrentInvoiceLine_Create
{

    /**
     * @var CurrentInvoiceHandle $invoiceHandle
     */
    protected $invoiceHandle = null;

    /**
     * @param CurrentInvoiceHandle $invoiceHandle
     */
    public function __construct($invoiceHandle)
    {
      $this->invoiceHandle = $invoiceHandle;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getInvoiceHandle()
    {
      return $this->invoiceHandle;
    }

    /**
     * @param CurrentInvoiceHandle $invoiceHandle
     * @return \Economic\CurrentInvoiceLine_Create
     */
    public function setInvoiceHandle($invoiceHandle)
    {
      $this->invoiceHandle = $invoiceHandle;
      return $this;
    }

}
