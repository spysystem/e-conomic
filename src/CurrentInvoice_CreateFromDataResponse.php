<?php

namespace Economic;

class CurrentInvoice_CreateFromDataResponse
{

    /**
     * @var CurrentInvoiceHandle $CurrentInvoice_CreateFromDataResult
     */
    protected $CurrentInvoice_CreateFromDataResult = null;

    /**
     * @param CurrentInvoiceHandle $CurrentInvoice_CreateFromDataResult
     */
    public function __construct($CurrentInvoice_CreateFromDataResult)
    {
      $this->CurrentInvoice_CreateFromDataResult = $CurrentInvoice_CreateFromDataResult;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getCurrentInvoice_CreateFromDataResult()
    {
      return $this->CurrentInvoice_CreateFromDataResult;
    }

    /**
     * @param CurrentInvoiceHandle $CurrentInvoice_CreateFromDataResult
     * @return \Economic\CurrentInvoice_CreateFromDataResponse
     */
    public function setCurrentInvoice_CreateFromDataResult($CurrentInvoice_CreateFromDataResult)
    {
      $this->CurrentInvoice_CreateFromDataResult = $CurrentInvoice_CreateFromDataResult;
      return $this;
    }

}
