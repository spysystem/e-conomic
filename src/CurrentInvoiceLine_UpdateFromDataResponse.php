<?php

namespace Economic;

class CurrentInvoiceLine_UpdateFromDataResponse
{

    /**
     * @var CurrentInvoiceLineHandle $CurrentInvoiceLine_UpdateFromDataResult
     */
    protected $CurrentInvoiceLine_UpdateFromDataResult = null;

    /**
     * @param CurrentInvoiceLineHandle $CurrentInvoiceLine_UpdateFromDataResult
     */
    public function __construct($CurrentInvoiceLine_UpdateFromDataResult)
    {
      $this->CurrentInvoiceLine_UpdateFromDataResult = $CurrentInvoiceLine_UpdateFromDataResult;
    }

    /**
     * @return CurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_UpdateFromDataResult()
    {
      return $this->CurrentInvoiceLine_UpdateFromDataResult;
    }

    /**
     * @param CurrentInvoiceLineHandle $CurrentInvoiceLine_UpdateFromDataResult
     * @return \Economic\CurrentInvoiceLine_UpdateFromDataResponse
     */
    public function setCurrentInvoiceLine_UpdateFromDataResult($CurrentInvoiceLine_UpdateFromDataResult)
    {
      $this->CurrentInvoiceLine_UpdateFromDataResult = $CurrentInvoiceLine_UpdateFromDataResult;
      return $this;
    }

}
