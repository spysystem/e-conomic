<?php

namespace Economic;

class DistributionKey_FindByNumberListResponse
{

    /**
     * @var ArrayOfDistributionKeyHandle $DistributionKey_FindByNumberListResult
     */
    protected $DistributionKey_FindByNumberListResult = null;

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_FindByNumberListResult
     */
    public function __construct($DistributionKey_FindByNumberListResult)
    {
      $this->DistributionKey_FindByNumberListResult = $DistributionKey_FindByNumberListResult;
    }

    /**
     * @return ArrayOfDistributionKeyHandle
     */
    public function getDistributionKey_FindByNumberListResult()
    {
      return $this->DistributionKey_FindByNumberListResult;
    }

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_FindByNumberListResult
     * @return \Economic\DistributionKey_FindByNumberListResponse
     */
    public function setDistributionKey_FindByNumberListResult($DistributionKey_FindByNumberListResult)
    {
      $this->DistributionKey_FindByNumberListResult = $DistributionKey_FindByNumberListResult;
      return $this;
    }

}
