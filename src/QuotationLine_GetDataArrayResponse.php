<?php

namespace Economic;

class QuotationLine_GetDataArrayResponse
{

    /**
     * @var ArrayOfQuotationLineData $QuotationLine_GetDataArrayResult
     */
    protected $QuotationLine_GetDataArrayResult = null;

    /**
     * @param ArrayOfQuotationLineData $QuotationLine_GetDataArrayResult
     */
    public function __construct($QuotationLine_GetDataArrayResult)
    {
      $this->QuotationLine_GetDataArrayResult = $QuotationLine_GetDataArrayResult;
    }

    /**
     * @return ArrayOfQuotationLineData
     */
    public function getQuotationLine_GetDataArrayResult()
    {
      return $this->QuotationLine_GetDataArrayResult;
    }

    /**
     * @param ArrayOfQuotationLineData $QuotationLine_GetDataArrayResult
     * @return \Economic\QuotationLine_GetDataArrayResponse
     */
    public function setQuotationLine_GetDataArrayResult($QuotationLine_GetDataArrayResult)
    {
      $this->QuotationLine_GetDataArrayResult = $QuotationLine_GetDataArrayResult;
      return $this;
    }

}
