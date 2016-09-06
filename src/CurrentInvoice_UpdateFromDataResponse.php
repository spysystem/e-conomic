<?php

namespace Economic;

class CurrentInvoice_UpdateFromDataResponse
{

    /**
     * @var CurrentInvoiceHandle $CurrentInvoice_UpdateFromDataResult
     */
    protected $CurrentInvoice_UpdateFromDataResult = null;

    /**
     * @param CurrentInvoiceHandle $CurrentInvoice_UpdateFromDataResult
     */
    public function __construct($CurrentInvoice_UpdateFromDataResult)
    {
      $this->CurrentInvoice_UpdateFromDataResult = $CurrentInvoice_UpdateFromDataResult;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getCurrentInvoice_UpdateFromDataResult()
    {
      return $this->CurrentInvoice_UpdateFromDataResult;
    }

    /**
     * @param CurrentInvoiceHandle $CurrentInvoice_UpdateFromDataResult
     * @return \Economic\CurrentInvoice_UpdateFromDataResponse
     */
    public function setCurrentInvoice_UpdateFromDataResult($CurrentInvoice_UpdateFromDataResult)
    {
      $this->CurrentInvoice_UpdateFromDataResult = $CurrentInvoice_UpdateFromDataResult;
      return $this;
    }

}
