<?php

namespace Economic;

class InvoiceLine_GetProductResponse
{

    /**
     * @var ProductHandle $InvoiceLine_GetProductResult
     */
    protected $InvoiceLine_GetProductResult = null;

    /**
     * @param ProductHandle $InvoiceLine_GetProductResult
     */
    public function __construct($InvoiceLine_GetProductResult)
    {
      $this->InvoiceLine_GetProductResult = $InvoiceLine_GetProductResult;
    }

    /**
     * @return ProductHandle
     */
    public function getInvoiceLine_GetProductResult()
    {
      return $this->InvoiceLine_GetProductResult;
    }

    /**
     * @param ProductHandle $InvoiceLine_GetProductResult
     * @return \Economic\InvoiceLine_GetProductResponse
     */
    public function setInvoiceLine_GetProductResult($InvoiceLine_GetProductResult)
    {
      $this->InvoiceLine_GetProductResult = $InvoiceLine_GetProductResult;
      return $this;
    }

}
