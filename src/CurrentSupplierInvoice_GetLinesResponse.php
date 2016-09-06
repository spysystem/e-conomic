<?php

namespace Economic;

class CurrentSupplierInvoice_GetLinesResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoice_GetLinesResult
     */
    protected $CurrentSupplierInvoice_GetLinesResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoice_GetLinesResult
     */
    public function __construct($CurrentSupplierInvoice_GetLinesResult)
    {
      $this->CurrentSupplierInvoice_GetLinesResult = $CurrentSupplierInvoice_GetLinesResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceLineHandle
     */
    public function getCurrentSupplierInvoice_GetLinesResult()
    {
      return $this->CurrentSupplierInvoice_GetLinesResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoice_GetLinesResult
     * @return \Economic\CurrentSupplierInvoice_GetLinesResponse
     */
    public function setCurrentSupplierInvoice_GetLinesResult($CurrentSupplierInvoice_GetLinesResult)
    {
      $this->CurrentSupplierInvoice_GetLinesResult = $CurrentSupplierInvoice_GetLinesResult;
      return $this;
    }

}
