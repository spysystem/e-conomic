<?php

namespace Economic;

class CurrentSupplierInvoice_GetAllResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_GetAllResult
     */
    protected $CurrentSupplierInvoice_GetAllResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_GetAllResult
     */
    public function __construct($CurrentSupplierInvoice_GetAllResult)
    {
      $this->CurrentSupplierInvoice_GetAllResult = $CurrentSupplierInvoice_GetAllResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoice_GetAllResult()
    {
      return $this->CurrentSupplierInvoice_GetAllResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_GetAllResult
     * @return \Economic\CurrentSupplierInvoice_GetAllResponse
     */
    public function setCurrentSupplierInvoice_GetAllResult($CurrentSupplierInvoice_GetAllResult)
    {
      $this->CurrentSupplierInvoice_GetAllResult = $CurrentSupplierInvoice_GetAllResult;
      return $this;
    }

}
