<?php

namespace Economic;

class CurrentSupplierInvoiceLine_SetUnitPrice
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $currentSupplierInvoiceLineHandle
     */
    protected $currentSupplierInvoiceLineHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param CurrentSupplierInvoiceLineHandle $currentSupplierInvoiceLineHandle
     * @param float $value
     */
    public function __construct($currentSupplierInvoiceLineHandle, $value)
    {
      $this->currentSupplierInvoiceLineHandle = $currentSupplierInvoiceLineHandle;
      $this->value = $value;
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
     * @return \Economic\CurrentSupplierInvoiceLine_SetUnitPrice
     */
    public function setCurrentSupplierInvoiceLineHandle($currentSupplierInvoiceLineHandle)
    {
      $this->currentSupplierInvoiceLineHandle = $currentSupplierInvoiceLineHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\CurrentSupplierInvoiceLine_SetUnitPrice
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
