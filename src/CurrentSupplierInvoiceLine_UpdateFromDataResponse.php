<?php

namespace Economic;

class CurrentSupplierInvoiceLine_UpdateFromDataResponse
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_UpdateFromDataResult
     */
    protected $CurrentSupplierInvoiceLine_UpdateFromDataResult = null;

    /**
     * @param CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_UpdateFromDataResult
     */
    public function __construct($CurrentSupplierInvoiceLine_UpdateFromDataResult)
    {
      $this->CurrentSupplierInvoiceLine_UpdateFromDataResult = $CurrentSupplierInvoiceLine_UpdateFromDataResult;
    }

    /**
     * @return CurrentSupplierInvoiceLineHandle
     */
    public function getCurrentSupplierInvoiceLine_UpdateFromDataResult()
    {
      return $this->CurrentSupplierInvoiceLine_UpdateFromDataResult;
    }

    /**
     * @param CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_UpdateFromDataResult
     * @return \Economic\CurrentSupplierInvoiceLine_UpdateFromDataResponse
     */
    public function setCurrentSupplierInvoiceLine_UpdateFromDataResult($CurrentSupplierInvoiceLine_UpdateFromDataResult)
    {
      $this->CurrentSupplierInvoiceLine_UpdateFromDataResult = $CurrentSupplierInvoiceLine_UpdateFromDataResult;
      return $this;
    }

}
