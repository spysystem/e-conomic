<?php

namespace Economic;

class CurrentSupplierInvoice_GetDataArrayResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceData $CurrentSupplierInvoice_GetDataArrayResult
     */
    protected $CurrentSupplierInvoice_GetDataArrayResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceData $CurrentSupplierInvoice_GetDataArrayResult
     */
    public function __construct($CurrentSupplierInvoice_GetDataArrayResult)
    {
      $this->CurrentSupplierInvoice_GetDataArrayResult = $CurrentSupplierInvoice_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceData
     */
    public function getCurrentSupplierInvoice_GetDataArrayResult()
    {
      return $this->CurrentSupplierInvoice_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceData $CurrentSupplierInvoice_GetDataArrayResult
     * @return \Economic\CurrentSupplierInvoice_GetDataArrayResponse
     */
    public function setCurrentSupplierInvoice_GetDataArrayResult($CurrentSupplierInvoice_GetDataArrayResult)
    {
      $this->CurrentSupplierInvoice_GetDataArrayResult = $CurrentSupplierInvoice_GetDataArrayResult;
      return $this;
    }

}
