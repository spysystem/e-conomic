<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetQuantityResponse
{

    /**
     * @var float $CurrentSupplierInvoiceLine_GetQuantityResult
     */
    protected $CurrentSupplierInvoiceLine_GetQuantityResult = null;

    /**
     * @param float $CurrentSupplierInvoiceLine_GetQuantityResult
     */
    public function __construct($CurrentSupplierInvoiceLine_GetQuantityResult)
    {
      $this->CurrentSupplierInvoiceLine_GetQuantityResult = $CurrentSupplierInvoiceLine_GetQuantityResult;
    }

    /**
     * @return float
     */
    public function getCurrentSupplierInvoiceLine_GetQuantityResult()
    {
      return $this->CurrentSupplierInvoiceLine_GetQuantityResult;
    }

    /**
     * @param float $CurrentSupplierInvoiceLine_GetQuantityResult
     * @return \Economic\CurrentSupplierInvoiceLine_GetQuantityResponse
     */
    public function setCurrentSupplierInvoiceLine_GetQuantityResult($CurrentSupplierInvoiceLine_GetQuantityResult)
    {
      $this->CurrentSupplierInvoiceLine_GetQuantityResult = $CurrentSupplierInvoiceLine_GetQuantityResult;
      return $this;
    }

}
