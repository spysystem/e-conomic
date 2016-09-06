<?php

namespace Economic;

class QuotationLine_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfQuotationLineHandle $QuotationLine_UpdateFromDataArrayResult
     */
    protected $QuotationLine_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_UpdateFromDataArrayResult
     */
    public function __construct($QuotationLine_UpdateFromDataArrayResult)
    {
      $this->QuotationLine_UpdateFromDataArrayResult = $QuotationLine_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getQuotationLine_UpdateFromDataArrayResult()
    {
      return $this->QuotationLine_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_UpdateFromDataArrayResult
     * @return \Economic\QuotationLine_UpdateFromDataArrayResponse
     */
    public function setQuotationLine_UpdateFromDataArrayResult($QuotationLine_UpdateFromDataArrayResult)
    {
      $this->QuotationLine_UpdateFromDataArrayResult = $QuotationLine_UpdateFromDataArrayResult;
      return $this;
    }

}
