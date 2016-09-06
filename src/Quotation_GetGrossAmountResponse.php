<?php

namespace Economic;

class Quotation_GetGrossAmountResponse
{

    /**
     * @var float $Quotation_GetGrossAmountResult
     */
    protected $Quotation_GetGrossAmountResult = null;

    /**
     * @param float $Quotation_GetGrossAmountResult
     */
    public function __construct($Quotation_GetGrossAmountResult)
    {
      $this->Quotation_GetGrossAmountResult = $Quotation_GetGrossAmountResult;
    }

    /**
     * @return float
     */
    public function getQuotation_GetGrossAmountResult()
    {
      return $this->Quotation_GetGrossAmountResult;
    }

    /**
     * @param float $Quotation_GetGrossAmountResult
     * @return \Economic\Quotation_GetGrossAmountResponse
     */
    public function setQuotation_GetGrossAmountResult($Quotation_GetGrossAmountResult)
    {
      $this->Quotation_GetGrossAmountResult = $Quotation_GetGrossAmountResult;
      return $this;
    }

}
