<?php

namespace Economic;

class InvoiceLine_FindByProductResponse
{

    /**
     * @var ArrayOfInvoiceLineHandle $InvoiceLine_FindByProductResult
     */
    protected $InvoiceLine_FindByProductResult = null;

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByProductResult
     */
    public function __construct($InvoiceLine_FindByProductResult)
    {
      $this->InvoiceLine_FindByProductResult = $InvoiceLine_FindByProductResult;
    }

    /**
     * @return ArrayOfInvoiceLineHandle
     */
    public function getInvoiceLine_FindByProductResult()
    {
      return $this->InvoiceLine_FindByProductResult;
    }

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByProductResult
     * @return \Economic\InvoiceLine_FindByProductResponse
     */
    public function setInvoiceLine_FindByProductResult($InvoiceLine_FindByProductResult)
    {
      $this->InvoiceLine_FindByProductResult = $InvoiceLine_FindByProductResult;
      return $this;
    }

}
