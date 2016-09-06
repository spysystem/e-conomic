<?php

namespace Economic;

class CurrentInvoice_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $CurrentInvoice_UpdateFromDataArrayResult
     */
    protected $CurrentInvoice_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_UpdateFromDataArrayResult
     */
    public function __construct($CurrentInvoice_UpdateFromDataArrayResult)
    {
      $this->CurrentInvoice_UpdateFromDataArrayResult = $CurrentInvoice_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoice_UpdateFromDataArrayResult()
    {
      return $this->CurrentInvoice_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_UpdateFromDataArrayResult
     * @return \Economic\CurrentInvoice_UpdateFromDataArrayResponse
     */
    public function setCurrentInvoice_UpdateFromDataArrayResult($CurrentInvoice_UpdateFromDataArrayResult)
    {
      $this->CurrentInvoice_UpdateFromDataArrayResult = $CurrentInvoice_UpdateFromDataArrayResult;
      return $this;
    }

}
