<?php

namespace Economic;

class QuotationLine_GetDescriptionResponse
{

    /**
     * @var string $QuotationLine_GetDescriptionResult
     */
    protected $QuotationLine_GetDescriptionResult = null;

    /**
     * @param string $QuotationLine_GetDescriptionResult
     */
    public function __construct($QuotationLine_GetDescriptionResult)
    {
      $this->QuotationLine_GetDescriptionResult = $QuotationLine_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getQuotationLine_GetDescriptionResult()
    {
      return $this->QuotationLine_GetDescriptionResult;
    }

    /**
     * @param string $QuotationLine_GetDescriptionResult
     * @return \Economic\QuotationLine_GetDescriptionResponse
     */
    public function setQuotationLine_GetDescriptionResult($QuotationLine_GetDescriptionResult)
    {
      $this->QuotationLine_GetDescriptionResult = $QuotationLine_GetDescriptionResult;
      return $this;
    }

}
