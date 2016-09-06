<?php

namespace Economic;

class CurrentSupplierInvoiceLine_SetProduct
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $currentSupplierInvoiceLineHandle
     */
    protected $currentSupplierInvoiceLineHandle = null;

    /**
     * @var ProductHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentSupplierInvoiceLineHandle $currentSupplierInvoiceLineHandle
     * @param ProductHandle $valueHandle
     */
    public function __construct($currentSupplierInvoiceLineHandle, $valueHandle)
    {
      $this->currentSupplierInvoiceLineHandle = $currentSupplierInvoiceLineHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\CurrentSupplierInvoiceLine_SetProduct
     */
    public function setCurrentSupplierInvoiceLineHandle($currentSupplierInvoiceLineHandle)
    {
      $this->currentSupplierInvoiceLineHandle = $currentSupplierInvoiceLineHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProductHandle $valueHandle
     * @return \Economic\CurrentSupplierInvoiceLine_SetProduct
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
