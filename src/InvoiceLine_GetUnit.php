<?php

namespace Economic;

class InvoiceLine_GetUnit
{

    /**
     * @var InvoiceLineHandle $invoiceLineHandle
     */
    protected $invoiceLineHandle = null;

    /**
     * @param InvoiceLineHandle $invoiceLineHandle
     */
    public function __construct($invoiceLineHandle)
    {
      $this->invoiceLineHandle = $invoiceLineHandle;
    }

    /**
     * @return InvoiceLineHandle
     */
    public function getInvoiceLineHandle()
    {
      return $this->invoiceLineHandle;
    }

    /**
     * @param InvoiceLineHandle $invoiceLineHandle
     * @return \Economic\InvoiceLine_GetUnit
     */
    public function setInvoiceLineHandle($invoiceLineHandle)
    {
      $this->invoiceLineHandle = $invoiceLineHandle;
      return $this;
    }

}
