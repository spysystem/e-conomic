<?php

namespace Economic;

class CurrentInvoiceLine_CreateFromDataResponse
{

    /**
     * @var CurrentInvoiceLineHandle $CurrentInvoiceLine_CreateFromDataResult
     */
    protected $CurrentInvoiceLine_CreateFromDataResult = null;

    /**
     * @param CurrentInvoiceLineHandle $CurrentInvoiceLine_CreateFromDataResult
     */
    public function __construct($CurrentInvoiceLine_CreateFromDataResult)
    {
      $this->CurrentInvoiceLine_CreateFromDataResult = $CurrentInvoiceLine_CreateFromDataResult;
    }

    /**
     * @return CurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_CreateFromDataResult()
    {
      return $this->CurrentInvoiceLine_CreateFromDataResult;
    }

    /**
     * @param CurrentInvoiceLineHandle $CurrentInvoiceLine_CreateFromDataResult
     * @return \Economic\CurrentInvoiceLine_CreateFromDataResponse
     */
    public function setCurrentInvoiceLine_CreateFromDataResult($CurrentInvoiceLine_CreateFromDataResult)
    {
      $this->CurrentInvoiceLine_CreateFromDataResult = $CurrentInvoiceLine_CreateFromDataResult;
      return $this;
    }

}
