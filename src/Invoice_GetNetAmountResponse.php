<?php

namespace Economic;

class Invoice_GetNetAmountResponse
{

    /**
     * @var float $Invoice_GetNetAmountResult
     */
    protected $Invoice_GetNetAmountResult = null;

    /**
     * @param float $Invoice_GetNetAmountResult
     */
    public function __construct($Invoice_GetNetAmountResult)
    {
      $this->Invoice_GetNetAmountResult = $Invoice_GetNetAmountResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetNetAmountResult()
    {
      return $this->Invoice_GetNetAmountResult;
    }

    /**
     * @param float $Invoice_GetNetAmountResult
     * @return \Economic\Invoice_GetNetAmountResponse
     */
    public function setInvoice_GetNetAmountResult($Invoice_GetNetAmountResult)
    {
      $this->Invoice_GetNetAmountResult = $Invoice_GetNetAmountResult;
      return $this;
    }

}
