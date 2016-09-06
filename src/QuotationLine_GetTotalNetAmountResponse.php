<?php

namespace Economic;

class QuotationLine_GetTotalNetAmountResponse
{

    /**
     * @var float $QuotationLine_GetTotalNetAmountResult
     */
    protected $QuotationLine_GetTotalNetAmountResult = null;

    /**
     * @param float $QuotationLine_GetTotalNetAmountResult
     */
    public function __construct($QuotationLine_GetTotalNetAmountResult)
    {
      $this->QuotationLine_GetTotalNetAmountResult = $QuotationLine_GetTotalNetAmountResult;
    }

    /**
     * @return float
     */
    public function getQuotationLine_GetTotalNetAmountResult()
    {
      return $this->QuotationLine_GetTotalNetAmountResult;
    }

    /**
     * @param float $QuotationLine_GetTotalNetAmountResult
     * @return \Economic\QuotationLine_GetTotalNetAmountResponse
     */
    public function setQuotationLine_GetTotalNetAmountResult($QuotationLine_GetTotalNetAmountResult)
    {
      $this->QuotationLine_GetTotalNetAmountResult = $QuotationLine_GetTotalNetAmountResult;
      return $this;
    }

}
