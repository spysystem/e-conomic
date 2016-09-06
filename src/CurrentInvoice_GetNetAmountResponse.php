<?php

namespace Economic;

class CurrentInvoice_GetNetAmountResponse
{

    /**
     * @var float $CurrentInvoice_GetNetAmountResult
     */
    protected $CurrentInvoice_GetNetAmountResult = null;

    /**
     * @param float $CurrentInvoice_GetNetAmountResult
     */
    public function __construct($CurrentInvoice_GetNetAmountResult)
    {
      $this->CurrentInvoice_GetNetAmountResult = $CurrentInvoice_GetNetAmountResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetNetAmountResult()
    {
      return $this->CurrentInvoice_GetNetAmountResult;
    }

    /**
     * @param float $CurrentInvoice_GetNetAmountResult
     * @return \Economic\CurrentInvoice_GetNetAmountResponse
     */
    public function setCurrentInvoice_GetNetAmountResult($CurrentInvoice_GetNetAmountResult)
    {
      $this->CurrentInvoice_GetNetAmountResult = $CurrentInvoice_GetNetAmountResult;
      return $this;
    }

}
