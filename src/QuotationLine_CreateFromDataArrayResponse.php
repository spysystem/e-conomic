<?php

namespace Economic;

class QuotationLine_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfQuotationLineHandle $QuotationLine_CreateFromDataArrayResult
     */
    protected $QuotationLine_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_CreateFromDataArrayResult
     */
    public function __construct($QuotationLine_CreateFromDataArrayResult)
    {
      $this->QuotationLine_CreateFromDataArrayResult = $QuotationLine_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getQuotationLine_CreateFromDataArrayResult()
    {
      return $this->QuotationLine_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_CreateFromDataArrayResult
     * @return \Economic\QuotationLine_CreateFromDataArrayResponse
     */
    public function setQuotationLine_CreateFromDataArrayResult($QuotationLine_CreateFromDataArrayResult)
    {
      $this->QuotationLine_CreateFromDataArrayResult = $QuotationLine_CreateFromDataArrayResult;
      return $this;
    }

}
