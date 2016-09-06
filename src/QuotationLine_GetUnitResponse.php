<?php

namespace Economic;

class QuotationLine_GetUnitResponse
{

    /**
     * @var UnitHandle $QuotationLine_GetUnitResult
     */
    protected $QuotationLine_GetUnitResult = null;

    /**
     * @param UnitHandle $QuotationLine_GetUnitResult
     */
    public function __construct($QuotationLine_GetUnitResult)
    {
      $this->QuotationLine_GetUnitResult = $QuotationLine_GetUnitResult;
    }

    /**
     * @return UnitHandle
     */
    public function getQuotationLine_GetUnitResult()
    {
      return $this->QuotationLine_GetUnitResult;
    }

    /**
     * @param UnitHandle $QuotationLine_GetUnitResult
     * @return \Economic\QuotationLine_GetUnitResponse
     */
    public function setQuotationLine_GetUnitResult($QuotationLine_GetUnitResult)
    {
      $this->QuotationLine_GetUnitResult = $QuotationLine_GetUnitResult;
      return $this;
    }

}
