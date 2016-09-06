<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetUnitPriceResponse
{

    /**
     * @var float $CurrentSupplierInvoiceLine_GetUnitPriceResult
     */
    protected $CurrentSupplierInvoiceLine_GetUnitPriceResult = null;

    /**
     * @param float $CurrentSupplierInvoiceLine_GetUnitPriceResult
     */
    public function __construct($CurrentSupplierInvoiceLine_GetUnitPriceResult)
    {
      $this->CurrentSupplierInvoiceLine_GetUnitPriceResult = $CurrentSupplierInvoiceLine_GetUnitPriceResult;
    }

    /**
     * @return float
     */
    public function getCurrentSupplierInvoiceLine_GetUnitPriceResult()
    {
      return $this->CurrentSupplierInvoiceLine_GetUnitPriceResult;
    }

    /**
     * @param float $CurrentSupplierInvoiceLine_GetUnitPriceResult
     * @return \Economic\CurrentSupplierInvoiceLine_GetUnitPriceResponse
     */
    public function setCurrentSupplierInvoiceLine_GetUnitPriceResult($CurrentSupplierInvoiceLine_GetUnitPriceResult)
    {
      $this->CurrentSupplierInvoiceLine_GetUnitPriceResult = $CurrentSupplierInvoiceLine_GetUnitPriceResult;
      return $this;
    }

}
