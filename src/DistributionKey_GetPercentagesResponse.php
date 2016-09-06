<?php

namespace Economic;

class DistributionKey_GetPercentagesResponse
{

    /**
     * @var ArrayOfDecimal $DistributionKey_GetPercentagesResult
     */
    protected $DistributionKey_GetPercentagesResult = null;

    /**
     * @param ArrayOfDecimal $DistributionKey_GetPercentagesResult
     */
    public function __construct($DistributionKey_GetPercentagesResult)
    {
      $this->DistributionKey_GetPercentagesResult = $DistributionKey_GetPercentagesResult;
    }

    /**
     * @return ArrayOfDecimal
     */
    public function getDistributionKey_GetPercentagesResult()
    {
      return $this->DistributionKey_GetPercentagesResult;
    }

    /**
     * @param ArrayOfDecimal $DistributionKey_GetPercentagesResult
     * @return \Economic\DistributionKey_GetPercentagesResponse
     */
    public function setDistributionKey_GetPercentagesResult($DistributionKey_GetPercentagesResult)
    {
      $this->DistributionKey_GetPercentagesResult = $DistributionKey_GetPercentagesResult;
      return $this;
    }

}
