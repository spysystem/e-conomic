<?php

namespace Economic;

class CurrentSupplierInvoice_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_UpdateFromDataArrayResult
     */
    protected $CurrentSupplierInvoice_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_UpdateFromDataArrayResult
     */
    public function __construct($CurrentSupplierInvoice_UpdateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoice_UpdateFromDataArrayResult = $CurrentSupplierInvoice_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceHandle
     */
    public function getCurrentSupplierInvoice_UpdateFromDataArrayResult()
    {
      return $this->CurrentSupplierInvoice_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $CurrentSupplierInvoice_UpdateFromDataArrayResult
     * @return \Economic\CurrentSupplierInvoice_UpdateFromDataArrayResponse
     */
    public function setCurrentSupplierInvoice_UpdateFromDataArrayResult($CurrentSupplierInvoice_UpdateFromDataArrayResult)
    {
      $this->CurrentSupplierInvoice_UpdateFromDataArrayResult = $CurrentSupplierInvoice_UpdateFromDataArrayResult;
      return $this;
    }

}
