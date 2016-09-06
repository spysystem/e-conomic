<?php

namespace Economic;

class QuotationLine_GetUnitNetPriceResponse
{

    /**
     * @var float $QuotationLine_GetUnitNetPriceResult
     */
    protected $QuotationLine_GetUnitNetPriceResult = null;

    /**
     * @param float $QuotationLine_GetUnitNetPriceResult
     */
    public function __construct($QuotationLine_GetUnitNetPriceResult)
    {
      $this->QuotationLine_GetUnitNetPriceResult = $QuotationLine_GetUnitNetPriceResult;
    }

    /**
     * @return float
     */
    public function getQuotationLine_GetUnitNetPriceResult()
    {
      return $this->QuotationLine_GetUnitNetPriceResult;
    }

    /**
     * @param float $QuotationLine_GetUnitNetPriceResult
     * @return \Economic\QuotationLine_GetUnitNetPriceResponse
     */
    public function setQuotationLine_GetUnitNetPriceResult($QuotationLine_GetUnitNetPriceResult)
    {
      $this->QuotationLine_GetUnitNetPriceResult = $QuotationLine_GetUnitNetPriceResult;
      return $this;
    }

}
