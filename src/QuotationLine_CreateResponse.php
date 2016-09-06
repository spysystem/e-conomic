<?php

namespace Economic;

class QuotationLine_CreateResponse
{

    /**
     * @var QuotationLineHandle $QuotationLine_CreateResult
     */
    protected $QuotationLine_CreateResult = null;

    /**
     * @param QuotationLineHandle $QuotationLine_CreateResult
     */
    public function __construct($QuotationLine_CreateResult)
    {
      $this->QuotationLine_CreateResult = $QuotationLine_CreateResult;
    }

    /**
     * @return QuotationLineHandle
     */
    public function getQuotationLine_CreateResult()
    {
      return $this->QuotationLine_CreateResult;
    }

    /**
     * @param QuotationLineHandle $QuotationLine_CreateResult
     * @return \Economic\QuotationLine_CreateResponse
     */
    public function setQuotationLine_CreateResult($QuotationLine_CreateResult)
    {
      $this->QuotationLine_CreateResult = $QuotationLine_CreateResult;
      return $this;
    }

}
