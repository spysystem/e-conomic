<?php

namespace Economic;

class QuotationLine_GetQuantityResponse
{

    /**
     * @var float $QuotationLine_GetQuantityResult
     */
    protected $QuotationLine_GetQuantityResult = null;

    /**
     * @param float $QuotationLine_GetQuantityResult
     */
    public function __construct($QuotationLine_GetQuantityResult)
    {
      $this->QuotationLine_GetQuantityResult = $QuotationLine_GetQuantityResult;
    }

    /**
     * @return float
     */
    public function getQuotationLine_GetQuantityResult()
    {
      return $this->QuotationLine_GetQuantityResult;
    }

    /**
     * @param float $QuotationLine_GetQuantityResult
     * @return \Economic\QuotationLine_GetQuantityResponse
     */
    public function setQuotationLine_GetQuantityResult($QuotationLine_GetQuantityResult)
    {
      $this->QuotationLine_GetQuantityResult = $QuotationLine_GetQuantityResult;
      return $this;
    }

}
