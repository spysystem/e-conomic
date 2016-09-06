<?php

namespace Economic;

class QuotationLine_GetNumberResponse
{

    /**
     * @var int $QuotationLine_GetNumberResult
     */
    protected $QuotationLine_GetNumberResult = null;

    /**
     * @param int $QuotationLine_GetNumberResult
     */
    public function __construct($QuotationLine_GetNumberResult)
    {
      $this->QuotationLine_GetNumberResult = $QuotationLine_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getQuotationLine_GetNumberResult()
    {
      return $this->QuotationLine_GetNumberResult;
    }

    /**
     * @param int $QuotationLine_GetNumberResult
     * @return \Economic\QuotationLine_GetNumberResponse
     */
    public function setQuotationLine_GetNumberResult($QuotationLine_GetNumberResult)
    {
      $this->QuotationLine_GetNumberResult = $QuotationLine_GetNumberResult;
      return $this;
    }

}
