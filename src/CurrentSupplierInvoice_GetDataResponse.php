<?php

namespace Economic;

class CurrentSupplierInvoice_GetDataResponse
{

    /**
     * @var CurrentSupplierInvoiceData $CurrentSupplierInvoice_GetDataResult
     */
    protected $CurrentSupplierInvoice_GetDataResult = null;

    /**
     * @param CurrentSupplierInvoiceData $CurrentSupplierInvoice_GetDataResult
     */
    public function __construct($CurrentSupplierInvoice_GetDataResult)
    {
      $this->CurrentSupplierInvoice_GetDataResult = $CurrentSupplierInvoice_GetDataResult;
    }

    /**
     * @return CurrentSupplierInvoiceData
     */
    public function getCurrentSupplierInvoice_GetDataResult()
    {
      return $this->CurrentSupplierInvoice_GetDataResult;
    }

    /**
     * @param CurrentSupplierInvoiceData $CurrentSupplierInvoice_GetDataResult
     * @return \Economic\CurrentSupplierInvoice_GetDataResponse
     */
    public function setCurrentSupplierInvoice_GetDataResult($CurrentSupplierInvoice_GetDataResult)
    {
      $this->CurrentSupplierInvoice_GetDataResult = $CurrentSupplierInvoice_GetDataResult;
      return $this;
    }

}
