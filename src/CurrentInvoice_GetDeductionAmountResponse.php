<?php

namespace Economic;

class CurrentInvoice_GetDeductionAmountResponse
{

    /**
     * @var float $CurrentInvoice_GetDeductionAmountResult
     */
    protected $CurrentInvoice_GetDeductionAmountResult = null;

    /**
     * @param float $CurrentInvoice_GetDeductionAmountResult
     */
    public function __construct($CurrentInvoice_GetDeductionAmountResult)
    {
      $this->CurrentInvoice_GetDeductionAmountResult = $CurrentInvoice_GetDeductionAmountResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetDeductionAmountResult()
    {
      return $this->CurrentInvoice_GetDeductionAmountResult;
    }

    /**
     * @param float $CurrentInvoice_GetDeductionAmountResult
     * @return \Economic\CurrentInvoice_GetDeductionAmountResponse
     */
    public function setCurrentInvoice_GetDeductionAmountResult($CurrentInvoice_GetDeductionAmountResult)
    {
      $this->CurrentInvoice_GetDeductionAmountResult = $CurrentInvoice_GetDeductionAmountResult;
      return $this;
    }

}
