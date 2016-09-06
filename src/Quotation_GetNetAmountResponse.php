<?php

namespace Economic;

class Quotation_GetNetAmountResponse
{

    /**
     * @var float $Quotation_GetNetAmountResult
     */
    protected $Quotation_GetNetAmountResult = null;

    /**
     * @param float $Quotation_GetNetAmountResult
     */
    public function __construct($Quotation_GetNetAmountResult)
    {
      $this->Quotation_GetNetAmountResult = $Quotation_GetNetAmountResult;
    }

    /**
     * @return float
     */
    public function getQuotation_GetNetAmountResult()
    {
      return $this->Quotation_GetNetAmountResult;
    }

    /**
     * @param float $Quotation_GetNetAmountResult
     * @return \Economic\Quotation_GetNetAmountResponse
     */
    public function setQuotation_GetNetAmountResult($Quotation_GetNetAmountResult)
    {
      $this->Quotation_GetNetAmountResult = $Quotation_GetNetAmountResult;
      return $this;
    }

}
