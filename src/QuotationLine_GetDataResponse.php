<?php

namespace Economic;

class QuotationLine_GetDataResponse
{

    /**
     * @var QuotationLineData $QuotationLine_GetDataResult
     */
    protected $QuotationLine_GetDataResult = null;

    /**
     * @param QuotationLineData $QuotationLine_GetDataResult
     */
    public function __construct($QuotationLine_GetDataResult)
    {
      $this->QuotationLine_GetDataResult = $QuotationLine_GetDataResult;
    }

    /**
     * @return QuotationLineData
     */
    public function getQuotationLine_GetDataResult()
    {
      return $this->QuotationLine_GetDataResult;
    }

    /**
     * @param QuotationLineData $QuotationLine_GetDataResult
     * @return \Economic\QuotationLine_GetDataResponse
     */
    public function setQuotationLine_GetDataResult($QuotationLine_GetDataResult)
    {
      $this->QuotationLine_GetDataResult = $QuotationLine_GetDataResult;
      return $this;
    }

}
