<?php

namespace Economic;

class DistributionKey_GetIsAccessibleResponse
{

    /**
     * @var boolean $DistributionKey_GetIsAccessibleResult
     */
    protected $DistributionKey_GetIsAccessibleResult = null;

    /**
     * @param boolean $DistributionKey_GetIsAccessibleResult
     */
    public function __construct($DistributionKey_GetIsAccessibleResult)
    {
      $this->DistributionKey_GetIsAccessibleResult = $DistributionKey_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getDistributionKey_GetIsAccessibleResult()
    {
      return $this->DistributionKey_GetIsAccessibleResult;
    }

    /**
     * @param boolean $DistributionKey_GetIsAccessibleResult
     * @return \Economic\DistributionKey_GetIsAccessibleResponse
     */
    public function setDistributionKey_GetIsAccessibleResult($DistributionKey_GetIsAccessibleResult)
    {
      $this->DistributionKey_GetIsAccessibleResult = $DistributionKey_GetIsAccessibleResult;
      return $this;
    }

}
