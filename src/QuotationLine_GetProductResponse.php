<?php

namespace Economic;

class QuotationLine_GetProductResponse
{

    /**
     * @var ProductHandle $QuotationLine_GetProductResult
     */
    protected $QuotationLine_GetProductResult = null;

    /**
     * @param ProductHandle $QuotationLine_GetProductResult
     */
    public function __construct($QuotationLine_GetProductResult)
    {
      $this->QuotationLine_GetProductResult = $QuotationLine_GetProductResult;
    }

    /**
     * @return ProductHandle
     */
    public function getQuotationLine_GetProductResult()
    {
      return $this->QuotationLine_GetProductResult;
    }

    /**
     * @param ProductHandle $QuotationLine_GetProductResult
     * @return \Economic\QuotationLine_GetProductResponse
     */
    public function setQuotationLine_GetProductResult($QuotationLine_GetProductResult)
    {
      $this->QuotationLine_GetProductResult = $QuotationLine_GetProductResult;
      return $this;
    }

}
