<?php

namespace Economic;

class QuotationLine_GetDiscountAsPercentResponse
{

    /**
     * @var float $QuotationLine_GetDiscountAsPercentResult
     */
    protected $QuotationLine_GetDiscountAsPercentResult = null;

    /**
     * @param float $QuotationLine_GetDiscountAsPercentResult
     */
    public function __construct($QuotationLine_GetDiscountAsPercentResult)
    {
      $this->QuotationLine_GetDiscountAsPercentResult = $QuotationLine_GetDiscountAsPercentResult;
    }

    /**
     * @return float
     */
    public function getQuotationLine_GetDiscountAsPercentResult()
    {
      return $this->QuotationLine_GetDiscountAsPercentResult;
    }

    /**
     * @param float $QuotationLine_GetDiscountAsPercentResult
     * @return \Economic\QuotationLine_GetDiscountAsPercentResponse
     */
    public function setQuotationLine_GetDiscountAsPercentResult($QuotationLine_GetDiscountAsPercentResult)
    {
      $this->QuotationLine_GetDiscountAsPercentResult = $QuotationLine_GetDiscountAsPercentResult;
      return $this;
    }

}
