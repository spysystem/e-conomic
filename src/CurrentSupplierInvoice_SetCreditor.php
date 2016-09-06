<?php

namespace Economic;

class CurrentSupplierInvoice_SetCreditor
{

    /**
     * @var CurrentSupplierInvoiceHandle $currentSupplierInvoiceHandle
     */
    protected $currentSupplierInvoiceHandle = null;

    /**
     * @var CreditorHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentSupplierInvoiceHandle $currentSupplierInvoiceHandle
     * @param CreditorHandle $valueHandle
     */
    public function __construct($currentSupplierInvoiceHandle, $valueHandle)
    {
      $this->currentSupplierInvoiceHandle = $currentSupplierInvoiceHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\CurrentSupplierInvoice_SetCreditor
     */
    public function setCurrentSupplierInvoiceHandle($currentSupplierInvoiceHandle)
    {
      $this->currentSupplierInvoiceHandle = $currentSupplierInvoiceHandle;
      return $this;
    }

    /**
     * @return CreditorHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param CreditorHandle $valueHandle
     * @return \Economic\CurrentSupplierInvoice_SetCreditor
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
