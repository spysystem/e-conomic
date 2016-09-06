<?php

namespace Economic;

class InvoiceLine_GetTotalNetAmountResponse
{

    /**
     * @var float $InvoiceLine_GetTotalNetAmountResult
     */
    protected $InvoiceLine_GetTotalNetAmountResult = null;

    /**
     * @param float $InvoiceLine_GetTotalNetAmountResult
     */
    public function __construct($InvoiceLine_GetTotalNetAmountResult)
    {
      $this->InvoiceLine_GetTotalNetAmountResult = $InvoiceLine_GetTotalNetAmountResult;
    }

    /**
     * @return float
     */
    public function getInvoiceLine_GetTotalNetAmountResult()
    {
      return $this->InvoiceLine_GetTotalNetAmountResult;
    }

    /**
     * @param float $InvoiceLine_GetTotalNetAmountResult
     * @return \Economic\InvoiceLine_GetTotalNetAmountResponse
     */
    public function setInvoiceLine_GetTotalNetAmountResult($InvoiceLine_GetTotalNetAmountResult)
    {
      $this->InvoiceLine_GetTotalNetAmountResult = $InvoiceLine_GetTotalNetAmountResult;
      return $this;
    }

}
