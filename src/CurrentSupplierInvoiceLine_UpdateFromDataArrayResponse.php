<?php

namespace Economic;

class CurrentSupplierInvoiceLine_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_UpdateFromDataArrayResult
     */
    protected $CurrentSupplierInvoiceLine_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_UpdateFromDataArrayResult
     */
    public function __construct($CurrentSupplierInvoiceLine_UpdateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoiceLine_UpdateFromDataArrayResult = $CurrentSupplierInvoiceLine_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceLineHandle
     */
    public function getCurrentSupplierInvoiceLine_UpdateFromDataArrayResult()
    {
      return $this->CurrentSupplierInvoiceLine_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_UpdateFromDataArrayResult
     * @return \Economic\CurrentSupplierInvoiceLine_UpdateFromDataArrayResponse
     */
    public function setCurrentSupplierInvoiceLine_UpdateFromDataArrayResult($CurrentSupplierInvoiceLine_UpdateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoiceLine_UpdateFromDataArrayResult = $CurrentSupplierInvoiceLine_UpdateFromDataArrayResult;
      return $this;
    }

}
