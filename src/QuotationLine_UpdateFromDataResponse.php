<?php

namespace Economic;

class QuotationLine_UpdateFromDataResponse
{

    /**
     * @var QuotationLineHandle $QuotationLine_UpdateFromDataResult
     */
    protected $QuotationLine_UpdateFromDataResult = null;

    /**
     * @param QuotationLineHandle $QuotationLine_UpdateFromDataResult
     */
    public function __construct($QuotationLine_UpdateFromDataResult)
    {
      $this->QuotationLine_UpdateFromDataResult = $QuotationLine_UpdateFromDataResult;
    }

    /**
     * @return QuotationLineHandle
     */
    public function getQuotationLine_UpdateFromDataResult()
    {
      return $this->QuotationLine_UpdateFromDataResult;
    }

    /**
     * @param QuotationLineHandle $QuotationLine_UpdateFromDataResult
     * @return \Economic\QuotationLine_UpdateFromDataResponse
     */
    public function setQuotationLine_UpdateFromDataResult($QuotationLine_UpdateFromDataResult)
    {
      $this->QuotationLine_UpdateFromDataResult = $QuotationLine_UpdateFromDataResult;
      return $this;
    }

}
