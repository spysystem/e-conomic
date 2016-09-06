<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetDataResponse
{

    /**
     * @var CurrentSupplierInvoiceLineData $CurrentSupplierInvoiceLine_GetDataResult
     */
    protected $CurrentSupplierInvoiceLine_GetDataResult = null;

    /**
     * @param CurrentSupplierInvoiceLineData $CurrentSupplierInvoiceLine_GetDataResult
     */
    public function __construct($CurrentSupplierInvoiceLine_GetDataResult)
    {
      $this->CurrentSupplierInvoiceLine_GetDataResult = $CurrentSupplierInvoiceLine_GetDataResult;
    }

    /**
     * @return CurrentSupplierInvoiceLineData
     */
    public function getCurrentSupplierInvoiceLine_GetDataResult()
    {
      return $this->CurrentSupplierInvoiceLine_GetDataResult;
    }

    /**
     * @param CurrentSupplierInvoiceLineData $CurrentSupplierInvoiceLine_GetDataResult
     * @return \Economic\CurrentSupplierInvoiceLine_GetDataResponse
     */
    public function setCurrentSupplierInvoiceLine_GetDataResult($CurrentSupplierInvoiceLine_GetDataResult)
    {
      $this->CurrentSupplierInvoiceLine_GetDataResult = $CurrentSupplierInvoiceLine_GetDataResult;
      return $this;
    }

}
