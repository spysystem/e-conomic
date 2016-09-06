<?php

namespace Economic;

class CurrentSupplierInvoice_UpdateFromDataResponse
{

    /**
     * @var CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_UpdateFromDataResult
     */
    protected $CurrentSupplierInvoice_UpdateFromDataResult = null;

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_UpdateFromDataResult
     */
    public function __construct($CurrentSupplierInvoice_UpdateFromDataResult)
    {
      $this->CurrentSupplierInvoice_UpdateFromDataResult = $CurrentSupplierInvoice_UpdateFromDataResult;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoice_UpdateFromDataResult()
    {
      return $this->CurrentSupplierInvoice_UpdateFromDataResult;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_UpdateFromDataResult
     * @return \Economic\CurrentSupplierInvoice_UpdateFromDataResponse
     */
    public function setCurrentSupplierInvoice_UpdateFromDataResult($CurrentSupplierInvoice_UpdateFromDataResult)
    {
      $this->CurrentSupplierInvoice_UpdateFromDataResult = $CurrentSupplierInvoice_UpdateFromDataResult;
      return $this;
    }

}
