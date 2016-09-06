<?php

namespace Economic;

class Invoice_GetDeductionAmountResponse
{

    /**
     * @var float $Invoice_GetDeductionAmountResult
     */
    protected $Invoice_GetDeductionAmountResult = null;

    /**
     * @param float $Invoice_GetDeductionAmountResult
     */
    public function __construct($Invoice_GetDeductionAmountResult)
    {
      $this->Invoice_GetDeductionAmountResult = $Invoice_GetDeductionAmountResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetDeductionAmountResult()
    {
      return $this->Invoice_GetDeductionAmountResult;
    }

    /**
     * @param float $Invoice_GetDeductionAmountResult
     * @return \Economic\Invoice_GetDeductionAmountResponse
     */
    public function setInvoice_GetDeductionAmountResult($Invoice_GetDeductionAmountResult)
    {
      $this->Invoice_GetDeductionAmountResult = $Invoice_GetDeductionAmountResult;
      return $this;
    }

}
