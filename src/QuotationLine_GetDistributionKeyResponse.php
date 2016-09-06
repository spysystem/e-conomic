<?php

namespace Economic;

class QuotationLine_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $QuotationLine_GetDistributionKeyResult
     */
    protected $QuotationLine_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $QuotationLine_GetDistributionKeyResult
     */
    public function __construct($QuotationLine_GetDistributionKeyResult)
    {
      $this->QuotationLine_GetDistributionKeyResult = $QuotationLine_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getQuotationLine_GetDistributionKeyResult()
    {
      return $this->QuotationLine_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $QuotationLine_GetDistributionKeyResult
     * @return \Economic\QuotationLine_GetDistributionKeyResponse
     */
    public function setQuotationLine_GetDistributionKeyResult($QuotationLine_GetDistributionKeyResult)
    {
      $this->QuotationLine_GetDistributionKeyResult = $QuotationLine_GetDistributionKeyResult;
      return $this;
    }

}
