<?php

namespace Economic;

class CurrentInvoiceLine_GetNumberResponse
{

    /**
     * @var int $CurrentInvoiceLine_GetNumberResult
     */
    protected $CurrentInvoiceLine_GetNumberResult = null;

    /**
     * @param int $CurrentInvoiceLine_GetNumberResult
     */
    public function __construct($CurrentInvoiceLine_GetNumberResult)
    {
      $this->CurrentInvoiceLine_GetNumberResult = $CurrentInvoiceLine_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getCurrentInvoiceLine_GetNumberResult()
    {
      return $this->CurrentInvoiceLine_GetNumberResult;
    }

    /**
     * @param int $CurrentInvoiceLine_GetNumberResult
     * @return \Economic\CurrentInvoiceLine_GetNumberResponse
     */
    public function setCurrentInvoiceLine_GetNumberResult($CurrentInvoiceLine_GetNumberResult)
    {
      $this->CurrentInvoiceLine_GetNumberResult = $CurrentInvoiceLine_GetNumberResult;
      return $this;
    }

}
