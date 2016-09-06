<?php

namespace Economic;

class DistributionKey_GetDataArrayResponse
{

    /**
     * @var ArrayOfDistributionKeyData $DistributionKey_GetDataArrayResult
     */
    protected $DistributionKey_GetDataArrayResult = null;

    /**
     * @param ArrayOfDistributionKeyData $DistributionKey_GetDataArrayResult
     */
    public function __construct($DistributionKey_GetDataArrayResult)
    {
      $this->DistributionKey_GetDataArrayResult = $DistributionKey_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDistributionKeyData
     */
    public function getDistributionKey_GetDataArrayResult()
    {
      return $this->DistributionKey_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDistributionKeyData $DistributionKey_GetDataArrayResult
     * @return \Economic\DistributionKey_GetDataArrayResponse
     */
    public function setDistributionKey_GetDataArrayResult($DistributionKey_GetDataArrayResult)
    {
      $this->DistributionKey_GetDataArrayResult = $DistributionKey_GetDataArrayResult;
      return $this;
    }

}
