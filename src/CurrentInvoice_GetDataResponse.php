<?php

namespace Economic;

class CurrentInvoice_GetDataResponse
{

    /**
     * @var CurrentInvoiceData $CurrentInvoice_GetDataResult
     */
    protected $CurrentInvoice_GetDataResult = null;

    /**
     * @param CurrentInvoiceData $CurrentInvoice_GetDataResult
     */
    public function __construct($CurrentInvoice_GetDataResult)
    {
      $this->CurrentInvoice_GetDataResult = $CurrentInvoice_GetDataResult;
    }

    /**
     * @return CurrentInvoiceData
     */
    public function getCurrentInvoice_GetDataResult()
    {
      return $this->CurrentInvoice_GetDataResult;
    }

    /**
     * @param CurrentInvoiceData $CurrentInvoice_GetDataResult
     * @return \Economic\CurrentInvoice_GetDataResponse
     */
    public function setCurrentInvoice_GetDataResult($CurrentInvoice_GetDataResult)
    {
      $this->CurrentInvoice_GetDataResult = $CurrentInvoice_GetDataResult;
      return $this;
    }

}
