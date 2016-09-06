<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetDataArrayResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceLineData $CurrentSupplierInvoiceLine_GetDataArrayResult
     */
    protected $CurrentSupplierInvoiceLine_GetDataArrayResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineData $CurrentSupplierInvoiceLine_GetDataArrayResult
     */
    public function __construct($CurrentSupplierInvoiceLine_GetDataArrayResult)
    {
      $this->CurrentSupplierInvoiceLine_GetDataArrayResult = $CurrentSupplierInvoiceLine_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceLineData
     */
    public function getCurrentSupplierInvoiceLine_GetDataArrayResult()
    {
      return $this->CurrentSupplierInvoiceLine_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineData $CurrentSupplierInvoiceLine_GetDataArrayResult
     * @return \Economic\CurrentSupplierInvoiceLine_GetDataArrayResponse
     */
    public function setCurrentSupplierInvoiceLine_GetDataArrayResult($CurrentSupplierInvoiceLine_GetDataArrayResult)
    {
      $this->CurrentSupplierInvoiceLine_GetDataArrayResult = $CurrentSupplierInvoiceLine_GetDataArrayResult;
      return $this;
    }

}
