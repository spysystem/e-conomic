<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetQuantity
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $currentSupplierInvoiceLineHandle
     */
    protected $currentSupplierInvoiceLineHandle = null;

    /**
     * @param CurrentSupplierInvoiceLineHandle $currentSupplierInvoiceLineHandle
     */
    public function __construct($currentSupplierInvoiceLineHandle)
    {
      $this->currentSupplierInvoiceLineHandle = $currentSupplierInvoiceLineHandle;
    }

    /**
     * @return CurrentSupplierInvoiceLineHandle
     */
    public function getCurrentSupplierInvoiceLineHandle()
    {
      return $this->currentSupplierInvoiceLineHandle;
    }

    /**
     * @param CurrentSupplierInvoiceLineHandle $currentSupplierInvoiceLineHandle
     * @return \Economic\CurrentSupplierInvoiceLine_GetQuantity
     */
    public function setCurrentSupplierInvoiceLineHandle($currentSupplierInvoiceLineHandle)
    {
      $this->currentSupplierInvoiceLineHandle = $currentSupplierInvoiceLineHandle;
      return $this;
    }

}
