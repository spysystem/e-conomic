<?php

namespace Economic;

class QuotationLine_FindByProductResponse
{

    /**
     * @var ArrayOfQuotationLineHandle $QuotationLine_FindByProductResult
     */
    protected $QuotationLine_FindByProductResult = null;

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_FindByProductResult
     */
    public function __construct($QuotationLine_FindByProductResult)
    {
      $this->QuotationLine_FindByProductResult = $QuotationLine_FindByProductResult;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getQuotationLine_FindByProductResult()
    {
      return $this->QuotationLine_FindByProductResult;
    }

    /**
     * @param ArrayOfQuotationLineHandle $QuotationLine_FindByProductResult
     * @return \Economic\QuotationLine_FindByProductResponse
     */
    public function setQuotationLine_FindByProductResult($QuotationLine_FindByProductResult)
    {
      $this->QuotationLine_FindByProductResult = $QuotationLine_FindByProductResult;
      return $this;
    }

}
