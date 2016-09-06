<?php

namespace Economic;

class CurrentInvoice_GetDataArrayResponse
{

    /**
     * @var ArrayOfCurrentInvoiceData $CurrentInvoice_GetDataArrayResult
     */
    protected $CurrentInvoice_GetDataArrayResult = null;

    /**
     * @param ArrayOfCurrentInvoiceData $CurrentInvoice_GetDataArrayResult
     */
    public function __construct($CurrentInvoice_GetDataArrayResult)
    {
      $this->CurrentInvoice_GetDataArrayResult = $CurrentInvoice_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceData
     */
    public function getCurrentInvoice_GetDataArrayResult()
    {
      return $this->CurrentInvoice_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceData $CurrentInvoice_GetDataArrayResult
     * @return \Economic\CurrentInvoice_GetDataArrayResponse
     */
    public function setCurrentInvoice_GetDataArrayResult($CurrentInvoice_GetDataArrayResult)
    {
      $this->CurrentInvoice_GetDataArrayResult = $CurrentInvoice_GetDataArrayResult;
      return $this;
    }

}
