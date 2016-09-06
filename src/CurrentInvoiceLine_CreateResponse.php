<?php

namespace Economic;

class CurrentInvoiceLine_CreateResponse
{

    /**
     * @var CurrentInvoiceLineHandle $CurrentInvoiceLine_CreateResult
     */
    protected $CurrentInvoiceLine_CreateResult = null;

    /**
     * @param CurrentInvoiceLineHandle $CurrentInvoiceLine_CreateResult
     */
    public function __construct($CurrentInvoiceLine_CreateResult)
    {
      $this->CurrentInvoiceLine_CreateResult = $CurrentInvoiceLine_CreateResult;
    }

    /**
     * @return CurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_CreateResult()
    {
      return $this->CurrentInvoiceLine_CreateResult;
    }

    /**
     * @param CurrentInvoiceLineHandle $CurrentInvoiceLine_CreateResult
     * @return \Economic\CurrentInvoiceLine_CreateResponse
     */
    public function setCurrentInvoiceLine_CreateResult($CurrentInvoiceLine_CreateResult)
    {
      $this->CurrentInvoiceLine_CreateResult = $CurrentInvoiceLine_CreateResult;
      return $this;
    }

}
