<?php

namespace Economic;

class QuotationLine_GetAllResponse
{

    /**
     * @var ArrayOfQuotationLineHandle $QuotationLine_GetAllResult
     */
    protected $QuotationLine_GetAllResult = null;

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_GetAllResult
     */
    public function __construct($QuotationLine_GetAllResult)
    {
      $this->QuotationLine_GetAllResult = $QuotationLine_GetAllResult;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getQuotationLine_GetAllResult()
    {
      return $this->QuotationLine_GetAllResult;
    }

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_GetAllResult
     * @return \Economic\QuotationLine_GetAllResponse
     */
    public function setQuotationLine_GetAllResult($QuotationLine_GetAllResult)
    {
      $this->QuotationLine_GetAllResult = $QuotationLine_GetAllResult;
      return $this;
    }

}
