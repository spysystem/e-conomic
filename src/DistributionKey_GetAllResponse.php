<?php

namespace Economic;

class DistributionKey_GetAllResponse
{

    /**
     * @var ArrayOfDistributionKeyHandle $DistributionKey_GetAllResult
     */
    protected $DistributionKey_GetAllResult = null;

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_GetAllResult
     */
    public function __construct($DistributionKey_GetAllResult)
    {
      $this->DistributionKey_GetAllResult = $DistributionKey_GetAllResult;
    }

    /**
     * @return ArrayOfDistributionKeyHandle
     */
    public function getDistributionKey_GetAllResult()
    {
      return $this->DistributionKey_GetAllResult;
    }

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_GetAllResult
     * @return \Economic\DistributionKey_GetAllResponse
     */
    public function setDistributionKey_GetAllResult($DistributionKey_GetAllResult)
    {
      $this->DistributionKey_GetAllResult = $DistributionKey_GetAllResult;
      return $this;
    }

}
