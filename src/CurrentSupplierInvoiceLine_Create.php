<?php

namespace Economic;

class CurrentSupplierInvoiceLine_Create
{

    /**
     * @var CurrentSupplierInvoiceHandle $invoiceHandle
     */
    protected $invoiceHandle = null;

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @param CurrentSupplierInvoiceHandle $invoiceHandle
     * @param ProductHandle $productHandle
     */
    public function __construct($invoiceHandle, $productHandle)
    {
      $this->invoiceHandle = $invoiceHandle;
      $this->productHandle = $productHandle;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getInvoiceHandle()
    {
      return $this->invoiceHandle;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $invoiceHandle
     * @return \Economic\CurrentSupplierInvoiceLine_Create
     */
    public function setInvoiceHandle($invoiceHandle)
    {
      $this->invoiceHandle = $invoiceHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->productHandle;
    }

    /**
     * @param ProductHandle $productHandle
     * @return \Economic\CurrentSupplierInvoiceLine_Create
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

}
