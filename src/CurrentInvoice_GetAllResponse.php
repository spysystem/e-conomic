<?php

namespace Economic;

class CurrentInvoice_GetAllResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $CurrentInvoice_GetAllResult
     */
    protected $CurrentInvoice_GetAllResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_GetAllResult
     */
    public function __construct($CurrentInvoice_GetAllResult)
    {
      $this->CurrentInvoice_GetAllResult = $CurrentInvoice_GetAllResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoice_GetAllResult()
    {
      return $this->CurrentInvoice_GetAllResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_GetAllResult
     * @return \Economic\CurrentInvoice_GetAllResponse
     */
    public function setCurrentInvoice_GetAllResult($CurrentInvoice_GetAllResult)
    {
      $this->CurrentInvoice_GetAllResult = $CurrentInvoice_GetAllResult;
      return $this;
    }

}
