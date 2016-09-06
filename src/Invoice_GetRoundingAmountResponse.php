<?php

namespace Economic;

class Invoice_GetRoundingAmountResponse
{

    /**
     * @var float $Invoice_GetRoundingAmountResult
     */
    protected $Invoice_GetRoundingAmountResult = null;

    /**
     * @param float $Invoice_GetRoundingAmountResult
     */
    public function __construct($Invoice_GetRoundingAmountResult)
    {
      $this->Invoice_GetRoundingAmountResult = $Invoice_GetRoundingAmountResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetRoundingAmountResult()
    {
      return $this->Invoice_GetRoundingAmountResult;
    }

    /**
     * @param float $Invoice_GetRoundingAmountResult
     * @return \Economic\Invoice_GetRoundingAmountResponse
     */
    public function setInvoice_GetRoundingAmountResult($Invoice_GetRoundingAmountResult)
    {
      $this->Invoice_GetRoundingAmountResult = $Invoice_GetRoundingAmountResult;
      return $this;
    }

}
