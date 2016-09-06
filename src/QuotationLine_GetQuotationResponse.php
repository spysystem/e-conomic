<?php

namespace Economic;

class QuotationLine_GetQuotationResponse
{

    /**
     * @var QuotationHandle $QuotationLine_GetQuotationResult
     */
    protected $QuotationLine_GetQuotationResult = null;

    /**
     * @param QuotationHandle $QuotationLine_GetQuotationResult
     */
    public function __construct($QuotationLine_GetQuotationResult)
    {
      $this->QuotationLine_GetQuotationResult = $QuotationLine_GetQuotationResult;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotationLine_GetQuotationResult()
    {
      return $this->QuotationLine_GetQuotationResult;
    }

    /**
     * @param QuotationHandle $QuotationLine_GetQuotationResult
     * @return \Economic\QuotationLine_GetQuotationResponse
     */
    public function setQuotationLine_GetQuotationResult($QuotationLine_GetQuotationResult)
    {
      $this->QuotationLine_GetQuotationResult = $QuotationLine_GetQuotationResult;
      return $this;
    }

}
