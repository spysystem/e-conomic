<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetProductResponse
{

    /**
     * @var ProductHandle $CurrentSupplierInvoiceLine_GetProductResult
     */
    protected $CurrentSupplierInvoiceLine_GetProductResult = null;

    /**
     * @param ProductHandle $CurrentSupplierInvoiceLine_GetProductResult
     */
    public function __construct($CurrentSupplierInvoiceLine_GetProductResult)
    {
      $this->CurrentSupplierInvoiceLine_GetProductResult = $CurrentSupplierInvoiceLine_GetProductResult;
    }

    /**
     * @return ProductHandle
     */
    public function getCurrentSupplierInvoiceLine_GetProductResult()
    {
      return $this->CurrentSupplierInvoiceLine_GetProductResult;
    }

    /**
     * @param ProductHandle $CurrentSupplierInvoiceLine_GetProductResult
     * @return \Economic\CurrentSupplierInvoiceLine_GetProductResponse
     */
    public function setCurrentSupplierInvoiceLine_GetProductResult($CurrentSupplierInvoiceLine_GetProductResult)
    {
      $this->CurrentSupplierInvoiceLine_GetProductResult = $CurrentSupplierInvoiceLine_GetProductResult;
      return $this;
    }

}
