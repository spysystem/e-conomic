<?php

namespace Economic;

class CurrentInvoiceLine_GetDataArrayResponse
{

    /**
     * @var ArrayOfCurrentInvoiceLineData $CurrentInvoiceLine_GetDataArrayResult
     */
    protected $CurrentInvoiceLine_GetDataArrayResult = null;

    /**
     * @param ArrayOfCurrentInvoiceLineData $CurrentInvoiceLine_GetDataArrayResult
     */
    public function __construct($CurrentInvoiceLine_GetDataArrayResult)
    {
      $this->CurrentInvoiceLine_GetDataArrayResult = $CurrentInvoiceLine_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineData
     */
    public function getCurrentInvoiceLine_GetDataArrayResult()
    {
      return $this->CurrentInvoiceLine_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineData $CurrentInvoiceLine_GetDataArrayResult
     * @return \Economic\CurrentInvoiceLine_GetDataArrayResponse
     */
    public function setCurrentInvoiceLine_GetDataArrayResult($CurrentInvoiceLine_GetDataArrayResult)
    {
      $this->CurrentInvoiceLine_GetDataArrayResult = $CurrentInvoiceLine_GetDataArrayResult;
      return $this;
    }

}
