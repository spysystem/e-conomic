<?php

namespace Economic;

class QuotationLine_GetMarginAsPercentResponse
{

    /**
     * @var float $QuotationLine_GetMarginAsPercentResult
     */
    protected $QuotationLine_GetMarginAsPercentResult = null;

    /**
     * @param float $QuotationLine_GetMarginAsPercentResult
     */
    public function __construct($QuotationLine_GetMarginAsPercentResult)
    {
      $this->QuotationLine_GetMarginAsPercentResult = $QuotationLine_GetMarginAsPercentResult;
    }

    /**
     * @return float
     */
    public function getQuotationLine_GetMarginAsPercentResult()
    {
      return $this->QuotationLine_GetMarginAsPercentResult;
    }

    /**
     * @param float $QuotationLine_GetMarginAsPercentResult
     * @return \Economic\QuotationLine_GetMarginAsPercentResponse
     */
    public function setQuotationLine_GetMarginAsPercentResult($QuotationLine_GetMarginAsPercentResult)
    {
      $this->QuotationLine_GetMarginAsPercentResult = $QuotationLine_GetMarginAsPercentResult;
      return $this;
    }

}
