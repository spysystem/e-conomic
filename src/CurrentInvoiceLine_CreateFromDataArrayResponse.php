<?php

namespace Economic;

class CurrentInvoiceLine_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_CreateFromDataArrayResult
     */
    protected $CurrentInvoiceLine_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_CreateFromDataArrayResult
     */
    public function __construct($CurrentInvoiceLine_CreateFromDataArrayResult)
    {
      $this->CurrentInvoiceLine_CreateFromDataArrayResult = $CurrentInvoiceLine_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLine_CreateFromDataArrayResult()
    {
      return $this->CurrentInvoiceLine_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $CurrentInvoiceLine_CreateFromDataArrayResult
     * @return \Economic\CurrentInvoiceLine_CreateFromDataArrayResponse
     */
    public function setCurrentInvoiceLine_CreateFromDataArrayResult($CurrentInvoiceLine_CreateFromDataArrayResult)
    {
      $this->CurrentInvoiceLine_CreateFromDataArrayResult = $CurrentInvoiceLine_CreateFromDataArrayResult;
      return $this;
    }

}
