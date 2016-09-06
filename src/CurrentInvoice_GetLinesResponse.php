<?php

namespace Economic;

class CurrentInvoice_GetLinesResponse
{

    /**
     * @var ArrayOfCurrentInvoiceLineHandle $CurrentInvoice_GetLinesResult
     */
    protected $CurrentInvoice_GetLinesResult = null;

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoice_GetLinesResult
     */
    public function __construct($CurrentInvoice_GetLinesResult)
    {
      $this->CurrentInvoice_GetLinesResult = $CurrentInvoice_GetLinesResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineHandle
     */
    public function getCurrentInvoice_GetLinesResult()
    {
      return $this->CurrentInvoice_GetLinesResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoice_GetLinesResult
     * @return \Economic\CurrentInvoice_GetLinesResponse
     */
    public function setCurrentInvoice_GetLinesResult($CurrentInvoice_GetLinesResult)
    {
      $this->CurrentInvoice_GetLinesResult = $CurrentInvoice_GetLinesResult;
      return $this;
    }

}
