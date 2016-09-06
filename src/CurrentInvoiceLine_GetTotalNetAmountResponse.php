<?php

namespace Economic;

class CurrentInvoiceLine_GetTotalNetAmountResponse
{

    /**
     * @var float $CurrentInvoiceLine_GetTotalNetAmountResult
     */
    protected $CurrentInvoiceLine_GetTotalNetAmountResult = null;

    /**
     * @param float $CurrentInvoiceLine_GetTotalNetAmountResult
     */
    public function __construct($CurrentInvoiceLine_GetTotalNetAmountResult)
    {
      $this->CurrentInvoiceLine_GetTotalNetAmountResult = $CurrentInvoiceLine_GetTotalNetAmountResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoiceLine_GetTotalNetAmountResult()
    {
      return $this->CurrentInvoiceLine_GetTotalNetAmountResult;
    }

    /**
     * @param float $CurrentInvoiceLine_GetTotalNetAmountResult
     * @return \Economic\CurrentInvoiceLine_GetTotalNetAmountResponse
     */
    public function setCurrentInvoiceLine_GetTotalNetAmountResult($CurrentInvoiceLine_GetTotalNetAmountResult)
    {
      $this->CurrentInvoiceLine_GetTotalNetAmountResult = $CurrentInvoiceLine_GetTotalNetAmountResult;
      return $this;
    }

}
