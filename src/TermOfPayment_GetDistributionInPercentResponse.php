<?php

namespace Economic;

class TermOfPayment_GetDistributionInPercentResponse
{

    /**
     * @var float $TermOfPayment_GetDistributionInPercentResult
     */
    protected $TermOfPayment_GetDistributionInPercentResult = null;

    /**
     * @param float $TermOfPayment_GetDistributionInPercentResult
     */
    public function __construct($TermOfPayment_GetDistributionInPercentResult)
    {
      $this->TermOfPayment_GetDistributionInPercentResult = $TermOfPayment_GetDistributionInPercentResult;
    }

    /**
     * @return float
     */
    public function getTermOfPayment_GetDistributionInPercentResult()
    {
      return $this->TermOfPayment_GetDistributionInPercentResult;
    }

    /**
     * @param float $TermOfPayment_GetDistributionInPercentResult
     * @return \Economic\TermOfPayment_GetDistributionInPercentResponse
     */
    public function setTermOfPayment_GetDistributionInPercentResult($TermOfPayment_GetDistributionInPercentResult)
    {
      $this->TermOfPayment_GetDistributionInPercentResult = $TermOfPayment_GetDistributionInPercentResult;
      return $this;
    }

}
