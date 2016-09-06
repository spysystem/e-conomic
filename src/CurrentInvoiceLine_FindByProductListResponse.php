<?php

namespace Economic;

class CurrentInvoiceLine_FindByProductListResponse
{

    /**
     * @var ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByProductListResult
     */
    protected $CurrentInvoiceLine_FindByProductListResult = null;

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByProductListResult
     */
    public function __construct($CurrentInvoiceLine_FindByProductListResult)
    {
      $this->CurrentInvoiceLine_FindByProductListResult = $CurrentInvoiceLine_FindByProductListResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_FindByProductListResult()
    {
      return $this->CurrentInvoiceLine_FindByProductListResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_FindByProductListResult
     * @return \Economic\CurrentInvoiceLine_FindByProductListResponse
     */
    public function setCurrentInvoiceLine_FindByProductListResult($CurrentInvoiceLine_FindByProductListResult)
    {
      $this->CurrentInvoiceLine_FindByProductListResult = $CurrentInvoiceLine_FindByProductListResult;
      return $this;
    }

}
