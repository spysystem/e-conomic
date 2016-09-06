<?php

namespace Economic;

class Quotation_GetRoundingAmountResponse
{

    /**
     * @var float $Quotation_GetRoundingAmountResult
     */
    protected $Quotation_GetRoundingAmountResult = null;

    /**
     * @param float $Quotation_GetRoundingAmountResult
     */
    public function __construct($Quotation_GetRoundingAmountResult)
    {
      $this->Quotation_GetRoundingAmountResult = $Quotation_GetRoundingAmountResult;
    }

    /**
     * @return float
     */
    public function getQuotation_GetRoundingAmountResult()
    {
      return $this->Quotation_GetRoundingAmountResult;
    }

    /**
     * @param float $Quotation_GetRoundingAmountResult
     * @return \Economic\Quotation_GetRoundingAmountResponse
     */
    public function setQuotation_GetRoundingAmountResult($Quotation_GetRoundingAmountResult)
    {
      $this->Quotation_GetRoundingAmountResult = $Quotation_GetRoundingAmountResult;
      return $this;
    }

}
