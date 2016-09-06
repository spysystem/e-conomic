<?php

namespace Economic;

class QuotationLine_FindByProductListResponse
{

    /**
     * @var ArrayOfQuotationLineHandle $QuotationLine_FindByProductListResult
     */
    protected $QuotationLine_FindByProductListResult = null;

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_FindByProductListResult
     */
    public function __construct($QuotationLine_FindByProductListResult)
    {
      $this->QuotationLine_FindByProductListResult = $QuotationLine_FindByProductListResult;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getQuotationLine_FindByProductListResult()
    {
      return $this->QuotationLine_FindByProductListResult;
    }

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_FindByProductListResult
     * @return \Economic\QuotationLine_FindByProductListResponse
     */
    public function setQuotationLine_FindByProductListResult($QuotationLine_FindByProductListResult)
    {
      $this->QuotationLine_FindByProductListResult = $QuotationLine_FindByProductListResult;
      return $this;
    }

}
