<?php

namespace Economic;

class CurrentSupplierInvoice_TotalAmount
{

    /**
     * @var CurrentSupplierInvoiceHandle $currentSupplierInvoiceHandle
     */
    protected $currentSupplierInvoiceHandle = null;

    /**
     * @param CurrentSupplierInvoiceHandle $currentSupplierInvoiceHandle
     */
    public function __construct($currentSupplierInvoiceHandle)
    {
      $this->currentSupplierInvoiceHandle = $currentSupplierInvoiceHandle;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoiceHandle()
    {
      return $this->currentSupplierInvoiceHandle;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $currentSupplierInvoiceHandle
     * @return \Economic\CurrentSupplierInvoice_TotalAmount
     */
    public function setCurrentSupplierInvoiceHandle($currentSupplierInvoiceHandle)
    {
      $this->currentSupplierInvoiceHandle = $currentSupplierInvoiceHandle;
      return $this;
    }

}
