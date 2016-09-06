<?php

namespace Economic;

class CurrentSupplierInvoiceLine_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateFromDataArrayResult
     */
    protected $CurrentSupplierInvoiceLine_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateFromDataArrayResult
     */
    public function __construct($CurrentSupplierInvoiceLine_CreateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoiceLine_CreateFromDataArrayResult = $CurrentSupplierInvoiceLine_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceLineHandle
     */
    public function getCurrentSupplierInvoiceLine_CreateFromDataArrayResult()
    {
      return $this->CurrentSupplierInvoiceLine_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateFromDataArrayResult
     * @return \Economic\CurrentSupplierInvoiceLine_CreateFromDataArrayResponse
     */
    public function setCurrentSupplierInvoiceLine_CreateFromDataArrayResult($CurrentSupplierInvoiceLine_CreateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoiceLine_CreateFromDataArrayResult = $CurrentSupplierInvoiceLine_CreateFromDataArrayResult;
      return $this;
    }

}
