<?php

namespace Economic;

class CurrentInvoice_CreateResponse
{

    /**
     * @var CurrentInvoiceHandle $CurrentInvoice_CreateResult
     */
    protected $CurrentInvoice_CreateResult = null;

    /**
     * @param CurrentInvoiceHandle $CurrentInvoice_CreateResult
     */
    public function __construct($CurrentInvoice_CreateResult)
    {
      $this->CurrentInvoice_CreateResult = $CurrentInvoice_CreateResult;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getCurrentInvoice_CreateResult()
    {
      return $this->CurrentInvoice_CreateResult;
    }

    /**
     * @param CurrentInvoiceHandle $CurrentInvoice_CreateResult
     * @return \Economic\CurrentInvoice_CreateResponse
     */
    public function setCurrentInvoice_CreateResult($CurrentInvoice_CreateResult)
    {
      $this->CurrentInvoice_CreateResult = $CurrentInvoice_CreateResult;
      return $this;
    }

}
