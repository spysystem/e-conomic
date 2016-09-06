<?php

namespace Economic;

class Invoice_GetGrossAmountResponse
{

    /**
     * @var float $Invoice_GetGrossAmountResult
     */
    protected $Invoice_GetGrossAmountResult = null;

    /**
     * @param float $Invoice_GetGrossAmountResult
     */
    public function __construct($Invoice_GetGrossAmountResult)
    {
      $this->Invoice_GetGrossAmountResult = $Invoice_GetGrossAmountResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetGrossAmountResult()
    {
      return $this->Invoice_GetGrossAmountResult;
    }

    /**
     * @param float $Invoice_GetGrossAmountResult
     * @return \Economic\Invoice_GetGrossAmountResponse
     */
    public function setInvoice_GetGrossAmountResult($Invoice_GetGrossAmountResult)
    {
      $this->Invoice_GetGrossAmountResult = $Invoice_GetGrossAmountResult;
      return $this;
    }

}
