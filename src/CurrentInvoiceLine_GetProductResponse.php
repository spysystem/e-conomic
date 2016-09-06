<?php

namespace Economic;

class CurrentInvoiceLine_GetProductResponse
{

    /**
     * @var ProductHandle $CurrentInvoiceLine_GetProductResult
     */
    protected $CurrentInvoiceLine_GetProductResult = null;

    /**
     * @param ProductHandle $CurrentInvoiceLine_GetProductResult
     */
    public function __construct($CurrentInvoiceLine_GetProductResult)
    {
      $this->CurrentInvoiceLine_GetProductResult = $CurrentInvoiceLine_GetProductResult;
    }

    /**
     * @return ProductHandle
     */
    public function getCurrentInvoiceLine_GetProductResult()
    {
      return $this->CurrentInvoiceLine_GetProductResult;
    }

    /**
     * @param ProductHandle $CurrentInvoiceLine_GetProductResult
     * @return \Economic\CurrentInvoiceLine_GetProductResponse
     */
    public function setCurrentInvoiceLine_GetProductResult($CurrentInvoiceLine_GetProductResult)
    {
      $this->CurrentInvoiceLine_GetProductResult = $CurrentInvoiceLine_GetProductResult;
      return $this;
    }

}
