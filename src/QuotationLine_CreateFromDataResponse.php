<?php

namespace Economic;

class QuotationLine_CreateFromDataResponse
{

    /**
     * @var QuotationLineHandle $QuotationLine_CreateFromDataResult
     */
    protected $QuotationLine_CreateFromDataResult = null;

    /**
     * @param QuotationLineHandle $QuotationLine_CreateFromDataResult
     */
    public function __construct($QuotationLine_CreateFromDataResult)
    {
      $this->QuotationLine_CreateFromDataResult = $QuotationLine_CreateFromDataResult;
    }

    /**
     * @return QuotationLineHandle
     */
    public function getQuotationLine_CreateFromDataResult()
    {
      return $this->QuotationLine_CreateFromDataResult;
    }

    /**
     * @param QuotationLineHandle $QuotationLine_CreateFromDataResult
     * @return \Economic\QuotationLine_CreateFromDataResponse
     */
    public function setQuotationLine_CreateFromDataResult($QuotationLine_CreateFromDataResult)
    {
      $this->QuotationLine_CreateFromDataResult = $QuotationLine_CreateFromDataResult;
      return $this;
    }

}
