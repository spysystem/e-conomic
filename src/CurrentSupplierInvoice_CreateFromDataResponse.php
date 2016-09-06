<?php

namespace Economic;

class CurrentSupplierInvoice_CreateFromDataResponse
{

    /**
     * @var CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateFromDataResult
     */
    protected $CurrentSupplierInvoice_CreateFromDataResult = null;

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateFromDataResult
     */
    public function __construct($CurrentSupplierInvoice_CreateFromDataResult)
    {
      $this->CurrentSupplierInvoice_CreateFromDataResult = $CurrentSupplierInvoice_CreateFromDataResult;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoice_CreateFromDataResult()
    {
      return $this->CurrentSupplierInvoice_CreateFromDataResult;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateFromDataResult
     * @return \Economic\CurrentSupplierInvoice_CreateFromDataResponse
     */
    public function setCurrentSupplierInvoice_CreateFromDataResult($CurrentSupplierInvoice_CreateFromDataResult)
    {
      $this->CurrentSupplierInvoice_CreateFromDataResult = $CurrentSupplierInvoice_CreateFromDataResult;
      return $this;
    }

}
