<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetInvoiceResponse
{

    /**
     * @var CurrentSupplierInvoiceHandle $CurrentSupplierInvoiceLine_GetInvoiceResult
     */
    protected $CurrentSupplierInvoiceLine_GetInvoiceResult = null;

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoiceLine_GetInvoiceResult
     */
    public function __construct($CurrentSupplierInvoiceLine_GetInvoiceResult)
    {
      $this->CurrentSupplierInvoiceLine_GetInvoiceResult = $CurrentSupplierInvoiceLine_GetInvoiceResult;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoiceLine_GetInvoiceResult()
    {
      return $this->CurrentSupplierInvoiceLine_GetInvoiceResult;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoiceLine_GetInvoiceResult
     * @return \Economic\CurrentSupplierInvoiceLine_GetInvoiceResponse
     */
    public function setCurrentSupplierInvoiceLine_GetInvoiceResult($CurrentSupplierInvoiceLine_GetInvoiceResult)
    {
      $this->CurrentSupplierInvoiceLine_GetInvoiceResult = $CurrentSupplierInvoiceLine_GetInvoiceResult;
      return $this;
    }

}
