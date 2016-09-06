<?php

namespace Economic;

class CurrentInvoiceLine_FindByCurrentInvoiceListResponse
{

    /**
     * @var ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByCurrentInvoiceListResult
     */
    protected $CurrentInvoiceLine_FindByCurrentInvoiceListResult = null;

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByCurrentInvoiceListResult
     */
    public function __construct($CurrentInvoiceLine_FindByCurrentInvoiceListResult)
    {
      $this->CurrentInvoiceLine_FindByCurrentInvoiceListResult = $CurrentInvoiceLine_FindByCurrentInvoiceListResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_FindByCurrentInvoiceListResult()
    {
      return $this->CurrentInvoiceLine_FindByCurrentInvoiceListResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByCurrentInvoiceListResult
     * @return \Economic\CurrentInvoiceLine_FindByCurrentInvoiceListResponse
     */
    public function setCurrentInvoiceLine_FindByCurrentInvoiceListResult($CurrentInvoiceLine_FindByCurrentInvoiceListResult)
    {
      $this->CurrentInvoiceLine_FindByCurrentInvoiceListResult = $CurrentInvoiceLine_FindByCurrentInvoiceListResult;
      return $this;
    }

}
