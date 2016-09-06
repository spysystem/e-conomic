<?php

namespace Economic;

class InvoiceLine_FindByProductListResponse
{

    /**
     * @var ArrayOfInvoiceLineHandle $InvoiceLine_FindByProductListResult
     */
    protected $InvoiceLine_FindByProductListResult = null;

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByProductListResult
     */
    public function __construct($InvoiceLine_FindByProductListResult)
    {
      $this->InvoiceLine_FindByProductListResult = $InvoiceLine_FindByProductListResult;
    }

    /**
     * @return ArrayOfInvoiceLineHandle
     */
    public function getInvoiceLine_FindByProductListResult()
    {
      return $this->InvoiceLine_FindByProductListResult;
    }

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByProductListResult
     * @return \Economic\InvoiceLine_FindByProductListResponse
     */
    public function setInvoiceLine_FindByProductListResult($InvoiceLine_FindByProductListResult)
    {
      $this->InvoiceLine_FindByProductListResult = $InvoiceLine_FindByProductListResult;
      return $this;
    }

}
