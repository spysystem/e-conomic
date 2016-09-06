<?php

namespace Economic;

class InvoiceLine_FindByInvoiceList
{

    /**
     * @var ArrayOfInvoiceHandle $invoiceHandles
     */
    protected $invoiceHandles = null;

    /**
     * @param ArrayOfInvoiceHandle $invoiceHandles
     */
    public function __construct($invoiceHandles)
    {
      $this->invoiceHandles = $invoiceHandles;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoiceHandles()
    {
      return $this->invoiceHandles;
    }

    /**
     * @param ArrayOfInvoiceHandle $invoiceHandles
     * @return \Economic\InvoiceLine_FindByInvoiceList
     */
    public function setInvoiceHandles($invoiceHandles)
    {
      $this->invoiceHandles = $invoiceHandles;
      return $this;
    }

}
