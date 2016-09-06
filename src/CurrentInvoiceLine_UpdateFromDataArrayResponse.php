<?php

namespace Economic;

class CurrentInvoiceLine_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_UpdateFromDataArrayResult
     */
    protected $CurrentInvoiceLine_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_UpdateFromDataArrayResult
     */
    public function __construct($CurrentInvoiceLine_UpdateFromDataArrayResult)
    {
      $this->CurrentInvoiceLine_UpdateFromDataArrayResult = $CurrentInvoiceLine_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_UpdateFromDataArrayResult()
    {
      return $this->CurrentInvoiceLine_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_UpdateFromDataArrayResult
     * @return \Economic\CurrentInvoiceLine_UpdateFromDataArrayResponse
     */
    public function setCurrentInvoiceLine_UpdateFromDataArrayResult($CurrentInvoiceLine_UpdateFromDataArrayResult)
    {
      $this->CurrentInvoiceLine_UpdateFromDataArrayResult = $CurrentInvoiceLine_UpdateFromDataArrayResult;
      return $this;
    }

}
