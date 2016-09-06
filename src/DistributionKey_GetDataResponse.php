<?php

namespace Economic;

class DistributionKey_GetDataResponse
{

    /**
     * @var DistributionKeyData $DistributionKey_GetDataResult
     */
    protected $DistributionKey_GetDataResult = null;

    /**
     * @param DistributionKeyData $DistributionKey_GetDataResult
     */
    public function __construct($DistributionKey_GetDataResult)
    {
      $this->DistributionKey_GetDataResult = $DistributionKey_GetDataResult;
    }

    /**
     * @return DistributionKeyData
     */
    public function getDistributionKey_GetDataResult()
    {
      return $this->DistributionKey_GetDataResult;
    }

    /**
     * @param DistributionKeyData $DistributionKey_GetDataResult
     * @return \Economic\DistributionKey_GetDataResponse
     */
    public function setDistributionKey_GetDataResult($DistributionKey_GetDataResult)
    {
      $this->DistributionKey_GetDataResult = $DistributionKey_GetDataResult;
      return $this;
    }

}
