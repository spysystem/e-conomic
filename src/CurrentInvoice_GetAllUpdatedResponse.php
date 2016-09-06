<?php

namespace Economic;

class CurrentInvoice_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $CurrentInvoice_GetAllUpdatedResult
     */
    protected $CurrentInvoice_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_GetAllUpdatedResult
     */
    public function __construct($CurrentInvoice_GetAllUpdatedResult)
    {
      $this->CurrentInvoice_GetAllUpdatedResult = $CurrentInvoice_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoice_GetAllUpdatedResult()
    {
      return $this->CurrentInvoice_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_GetAllUpdatedResult
     * @return \Economic\CurrentInvoice_GetAllUpdatedResponse
     */
    public function setCurrentInvoice_GetAllUpdatedResult($CurrentInvoice_GetAllUpdatedResult)
    {
      $this->CurrentInvoice_GetAllUpdatedResult = $CurrentInvoice_GetAllUpdatedResult;
      return $this;
    }

}
