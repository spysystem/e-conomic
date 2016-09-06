<?php

namespace Economic;

class CurrentSupplierInvoiceLine_CreateResponse
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateResult
     */
    protected $CurrentSupplierInvoiceLine_CreateResult = null;

    /**
     * @param CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateResult
     */
    public function __construct($CurrentSupplierInvoiceLine_CreateResult)
    {
      $this->CurrentSupplierInvoiceLine_CreateResult = $CurrentSupplierInvoiceLine_CreateResult;
    }

    /**
     * @return CurrentSupplierInvoiceLineHandle
     */
    public function getCurrentSupplierInvoiceLine_CreateResult()
    {
      return $this->CurrentSupplierInvoiceLine_CreateResult;
    }

    /**
     * @param CurrentSupplierInvoiceLineHandle $CurrentSupplierInvoiceLine_CreateResult
     * @return \Economic\CurrentSupplierInvoiceLine_CreateResponse
     */
    public function setCurrentSupplierInvoiceLine_CreateResult($CurrentSupplierInvoiceLine_CreateResult)
    {
      $this->CurrentSupplierInvoiceLine_CreateResult = $CurrentSupplierInvoiceLine_CreateResult;
      return $this;
    }

}
