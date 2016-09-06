<?php

namespace Economic;

class QuotationLine_FindByQuotationListResponse
{

    /**
     * @var ArrayOfQuotationLineHandle $QuotationLine_FindByQuotationListResult
     */
    protected $QuotationLine_FindByQuotationListResult = null;

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_FindByQuotationListResult
     */
    public function __construct($QuotationLine_FindByQuotationListResult)
    {
      $this->QuotationLine_FindByQuotationListResult = $QuotationLine_FindByQuotationListResult;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getQuotationLine_FindByQuotationListResult()
    {
      return $this->QuotationLine_FindByQuotationListResult;
    }

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_FindByQuotationListResult
     * @return \Economic\QuotationLine_FindByQuotationListResponse
     */
    public function setQuotationLine_FindByQuotationListResult($QuotationLine_FindByQuotationListResult)
    {
      $this->QuotationLine_FindByQuotationListResult = $QuotationLine_FindByQuotationListResult;
      return $this;
    }

}
