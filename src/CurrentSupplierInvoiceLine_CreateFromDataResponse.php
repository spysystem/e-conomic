<?php

namespace Economic;

class CurrentSupplierInvoiceLine_CreateFromDataResponse
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateFromDataResult
     */
    protected $CurrentSupplierInvoiceLine_CreateFromDataResult = null;

    /**
     * @param CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateFromDataResult
     */
    public function __construct($CurrentSupplierInvoiceLine_CreateFromDataResult)
    {
      $this->CurrentSupplierInvoiceLine_CreateFromDataResult = $CurrentSupplierInvoiceLine_CreateFromDataResult;
    }

    /**
     * @return CurrentSupplierInvoiceLineHandle
     */
    public function getCurrentSupplierInvoiceLine_CreateFromDataResult()
    {
      return $this->CurrentSupplierInvoiceLine_CreateFromDataResult;
    }

    /**
     * @param CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateFromDataResult
     * @return \Economic\CurrentSupplierInvoiceLine_CreateFromDataResponse
     */
    public function setCurrentSupplierInvoiceLine_CreateFromDataResult($CurrentSupplierInvoiceLine_CreateFromDataResult)
    {
      $this->CurrentSupplierInvoiceLine_CreateFromDataResult = $CurrentSupplierInvoiceLine_CreateFromDataResult;
      return $this;
    }

}
