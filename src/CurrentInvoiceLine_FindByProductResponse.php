<?php

namespace Economic;

class CurrentInvoiceLine_FindByProductResponse
{

    /**
     * @var ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByProductResult
     */
    protected $CurrentInvoiceLine_FindByProductResult = null;

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByProductResult
     */
    public function __construct($CurrentInvoiceLine_FindByProductResult)
    {
      $this->CurrentInvoiceLine_FindByProductResult = $CurrentInvoiceLine_FindByProductResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_FindByProductResult()
    {
      return $this->CurrentInvoiceLine_FindByProductResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByProductResult
     * @return \Economic\CurrentInvoiceLine_FindByProductResponse
     */
    public function setCurrentInvoiceLine_FindByProductResult($CurrentInvoiceLine_FindByProductResult)
    {
      $this->CurrentInvoiceLine_FindByProductResult = $CurrentInvoiceLine_FindByProductResult;
      return $this;
    }

}
