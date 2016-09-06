<?php

namespace Economic;

class CurrentSupplierInvoice_CreateResponse
{

    /**
     * @var CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateResult
     */
    protected $CurrentSupplierInvoice_CreateResult = null;

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateResult
     */
    public function __construct($CurrentSupplierInvoice_CreateResult)
    {
      $this->CurrentSupplierInvoice_CreateResult = $CurrentSupplierInvoice_CreateResult;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoice_CreateResult()
    {
      return $this->CurrentSupplierInvoice_CreateResult;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateResult
     * @return \Economic\CurrentSupplierInvoice_CreateResponse
     */
    public function setCurrentSupplierInvoice_CreateResult($CurrentSupplierInvoice_CreateResult)
    {
      $this->CurrentSupplierInvoice_CreateResult = $CurrentSupplierInvoice_CreateResult;
      return $this;
    }

}
