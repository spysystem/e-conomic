<?php

namespace Economic;

class CurrentSupplierInvoice_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateFromDataArrayResult
     */
    protected $CurrentSupplierInvoice_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateFromDataArrayResult
     */
    public function __construct($CurrentSupplierInvoice_CreateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoice_CreateFromDataArrayResult = $CurrentSupplierInvoice_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoice_CreateFromDataArrayResult()
    {
      return $this->CurrentSupplierInvoice_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_CreateFromDataArrayResult
     * @return \Economic\CurrentSupplierInvoice_CreateFromDataArrayResponse
     */
    public function setCurrentSupplierInvoice_CreateFromDataArrayResult($CurrentSupplierInvoice_CreateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoice_CreateFromDataArrayResult = $CurrentSupplierInvoice_CreateFromDataArrayResult;
      return $this;
    }

}
