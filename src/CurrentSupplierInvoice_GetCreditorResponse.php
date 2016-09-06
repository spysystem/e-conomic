<?php

namespace Economic;

class CurrentSupplierInvoice_GetCreditorResponse
{

    /**
     * @var CreditorHandle $CurrentSupplierInvoice_GetCreditorResult
     */
    protected $CurrentSupplierInvoice_GetCreditorResult = null;

    /**
     * @param CreditorHandle $CurrentSupplierInvoice_GetCreditorResult
     */
    public function __construct($CurrentSupplierInvoice_GetCreditorResult)
    {
      $this->CurrentSupplierInvoice_GetCreditorResult = $CurrentSupplierInvoice_GetCreditorResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCurrentSupplierInvoice_GetCreditorResult()
    {
      return $this->CurrentSupplierInvoice_GetCreditorResult;
    }

    /**
     * @param CreditorHandle $CurrentSupplierInvoice_GetCreditorResult
     * @return \Economic\CurrentSupplierInvoice_GetCreditorResponse
     */
    public function setCurrentSupplierInvoice_GetCreditorResult($CurrentSupplierInvoice_GetCreditorResult)
    {
      $this->CurrentSupplierInvoice_GetCreditorResult = $CurrentSupplierInvoice_GetCreditorResult;
      return $this;
    }

}
