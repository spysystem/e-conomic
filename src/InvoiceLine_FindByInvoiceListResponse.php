<?php

namespace Economic;

class InvoiceLine_FindByInvoiceListResponse
{

    /**
     * @var ArrayOfInvoiceLineHandle $InvoiceLine_FindByInvoiceListResult
     */
    protected $InvoiceLine_FindByInvoiceListResult = null;

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByInvoiceListResult
     */
    public function __construct($InvoiceLine_FindByInvoiceListResult)
    {
      $this->InvoiceLine_FindByInvoiceListResult = $InvoiceLine_FindByInvoiceListResult;
    }

    /**
     * @return ArrayOfInvoiceLineHandle
     */
    public function getInvoiceLine_FindByInvoiceListResult()
    {
      return $this->InvoiceLine_FindByInvoiceListResult;
    }

    /**
     * @param ArrayOfInvoiceLineHandle $InvoiceLine_FindByInvoiceListResult
     * @return \Economic\InvoiceLine_FindByInvoiceListResponse
     */
    public function setInvoiceLine_FindByInvoiceListResult($InvoiceLine_FindByInvoiceListResult)
    {
      $this->InvoiceLine_FindByInvoiceListResult = $InvoiceLine_FindByInvoiceListResult;
      return $this;
    }

}
