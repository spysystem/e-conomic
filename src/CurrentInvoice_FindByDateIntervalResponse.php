<?php

namespace Economic;

class CurrentInvoice_FindByDateIntervalResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByDateIntervalResult
     */
    protected $CurrentInvoice_FindByDateIntervalResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByDateIntervalResult
     */
    public function __construct($CurrentInvoice_FindByDateIntervalResult)
    {
      $this->CurrentInvoice_FindByDateIntervalResult = $CurrentInvoice_FindByDateIntervalResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoice_FindByDateIntervalResult()
    {
      return $this->CurrentInvoice_FindByDateIntervalResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByDateIntervalResult
     * @return \Economic\CurrentInvoice_FindByDateIntervalResponse
     */
    public function setCurrentInvoice_FindByDateIntervalResult($CurrentInvoice_FindByDateIntervalResult)
    {
      $this->CurrentInvoice_FindByDateIntervalResult = $CurrentInvoice_FindByDateIntervalResult;
      return $this;
    }

}
