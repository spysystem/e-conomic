<?php

namespace Economic;

class QuotationLine_GetTotalMarginResponse
{

    /**
     * @var float $QuotationLine_GetTotalMarginResult
     */
    protected $QuotationLine_GetTotalMarginResult = null;

    /**
     * @param float $QuotationLine_GetTotalMarginResult
     */
    public function __construct($QuotationLine_GetTotalMarginResult)
    {
      $this->QuotationLine_GetTotalMarginResult = $QuotationLine_GetTotalMarginResult;
    }

    /**
     * @return float
     */
    public function getQuotationLine_GetTotalMarginResult()
    {
      return $this->QuotationLine_GetTotalMarginResult;
    }

    /**
     * @param float $QuotationLine_GetTotalMarginResult
     * @return \Economic\QuotationLine_GetTotalMarginResponse
     */
    public function setQuotationLine_GetTotalMarginResult($QuotationLine_GetTotalMarginResult)
    {
      $this->QuotationLine_GetTotalMarginResult = $QuotationLine_GetTotalMarginResult;
      return $this;
    }

}
