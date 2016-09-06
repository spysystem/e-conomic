<?php

namespace Economic;

class QuotationLine_GetUnitCostPriceResponse
{

    /**
     * @var float $QuotationLine_GetUnitCostPriceResult
     */
    protected $QuotationLine_GetUnitCostPriceResult = null;

    /**
     * @param float $QuotationLine_GetUnitCostPriceResult
     */
    public function __construct($QuotationLine_GetUnitCostPriceResult)
    {
      $this->QuotationLine_GetUnitCostPriceResult = $QuotationLine_GetUnitCostPriceResult;
    }

    /**
     * @return float
     */
    public function getQuotationLine_GetUnitCostPriceResult()
    {
      return $this->QuotationLine_GetUnitCostPriceResult;
    }

    /**
     * @param float $QuotationLine_GetUnitCostPriceResult
     * @return \Economic\QuotationLine_GetUnitCostPriceResponse
     */
    public function setQuotationLine_GetUnitCostPriceResult($QuotationLine_GetUnitCostPriceResult)
    {
      $this->QuotationLine_GetUnitCostPriceResult = $QuotationLine_GetUnitCostPriceResult;
      return $this;
    }

}
