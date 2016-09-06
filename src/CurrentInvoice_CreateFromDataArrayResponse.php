<?php

namespace Economic;

class CurrentInvoice_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $CurrentInvoice_CreateFromDataArrayResult
     */
    protected $CurrentInvoice_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_CreateFromDataArrayResult
     */
    public function __construct($CurrentInvoice_CreateFromDataArrayResult)
    {
      $this->CurrentInvoice_CreateFromDataArrayResult = $CurrentInvoice_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoice_CreateFromDataArrayResult()
    {
      return $this->CurrentInvoice_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_CreateFromDataArrayResult
     * @return \Economic\CurrentInvoice_CreateFromDataArrayResponse
     */
    public function setCurrentInvoice_CreateFromDataArrayResult($CurrentInvoice_CreateFromDataArrayResult)
    {
      $this->CurrentInvoice_CreateFromDataArrayResult = $CurrentInvoice_CreateFromDataArrayResult;
      return $this;
    }

}
