<?php

namespace Economic;

class CurrentInvoiceLine_GetDataResponse
{

    /**
     * @var CurrentInvoiceLineData $CurrentInvoiceLine_GetDataResult
     */
    protected $CurrentInvoiceLine_GetDataResult = null;

    /**
     * @param CurrentInvoiceLineData $CurrentInvoiceLine_GetDataResult
     */
    public function __construct($CurrentInvoiceLine_GetDataResult)
    {
      $this->CurrentInvoiceLine_GetDataResult = $CurrentInvoiceLine_GetDataResult;
    }

    /**
     * @return CurrentInvoiceLineData
     */
    public function getCurrentInvoiceLine_GetDataResult()
    {
      return $this->CurrentInvoiceLine_GetDataResult;
    }

    /**
     * @param CurrentInvoiceLineData $CurrentInvoiceLine_GetDataResult
     * @return \Economic\CurrentInvoiceLine_GetDataResponse
     */
    public function setCurrentInvoiceLine_GetDataResult($CurrentInvoiceLine_GetDataResult)
    {
      $this->CurrentInvoiceLine_GetDataResult = $CurrentInvoiceLine_GetDataResult;
      return $this;
    }

}
