<?php

namespace Economic;

class Quotation_GetMarginAsPercentResponse
{

    /**
     * @var float $Quotation_GetMarginAsPercentResult
     */
    protected $Quotation_GetMarginAsPercentResult = null;

    /**
     * @param float $Quotation_GetMarginAsPercentResult
     */
    public function __construct($Quotation_GetMarginAsPercentResult)
    {
      $this->Quotation_GetMarginAsPercentResult = $Quotation_GetMarginAsPercentResult;
    }

    /**
     * @return float
     */
    public function getQuotation_GetMarginAsPercentResult()
    {
      return $this->Quotation_GetMarginAsPercentResult;
    }

    /**
     * @param float $Quotation_GetMarginAsPercentResult
     * @return \Economic\Quotation_GetMarginAsPercentResponse
     */
    public function setQuotation_GetMarginAsPercentResult($Quotation_GetMarginAsPercentResult)
    {
      $this->Quotation_GetMarginAsPercentResult = $Quotation_GetMarginAsPercentResult;
      return $this;
    }

}
