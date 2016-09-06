<?php

namespace Economic;

class TermOfPayment_GetDistributionInPercent2Response
{

    /**
     * @var float $TermOfPayment_GetDistributionInPercent2Result
     */
    protected $TermOfPayment_GetDistributionInPercent2Result = null;

    /**
     * @param float $TermOfPayment_GetDistributionInPercent2Result
     */
    public function __construct($TermOfPayment_GetDistributionInPercent2Result)
    {
      $this->TermOfPayment_GetDistributionInPercent2Result = $TermOfPayment_GetDistributionInPercent2Result;
    }

    /**
     * @return float
     */
    public function getTermOfPayment_GetDistributionInPercent2Result()
    {
      return $this->TermOfPayment_GetDistributionInPercent2Result;
    }

    /**
     * @param float $TermOfPayment_GetDistributionInPercent2Result
     * @return \Economic\TermOfPayment_GetDistributionInPercent2Response
     */
    public function setTermOfPayment_GetDistributionInPercent2Result($TermOfPayment_GetDistributionInPercent2Result)
    {
      $this->TermOfPayment_GetDistributionInPercent2Result = $TermOfPayment_GetDistributionInPercent2Result;
      return $this;
    }

}
