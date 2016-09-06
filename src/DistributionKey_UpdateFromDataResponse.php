<?php

namespace Economic;

class DistributionKey_UpdateFromDataResponse
{

    /**
     * @var DistributionKeyHandle $DistributionKey_UpdateFromDataResult
     */
    protected $DistributionKey_UpdateFromDataResult = null;

    /**
     * @param DistributionKeyHandle $DistributionKey_UpdateFromDataResult
     */
    public function __construct($DistributionKey_UpdateFromDataResult)
    {
      $this->DistributionKey_UpdateFromDataResult = $DistributionKey_UpdateFromDataResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getDistributionKey_UpdateFromDataResult()
    {
      return $this->DistributionKey_UpdateFromDataResult;
    }

    /**
     * @param DistributionKeyHandle $DistributionKey_UpdateFromDataResult
     * @return \Economic\DistributionKey_UpdateFromDataResponse
     */
    public function setDistributionKey_UpdateFromDataResult($DistributionKey_UpdateFromDataResult)
    {
      $this->DistributionKey_UpdateFromDataResult = $DistributionKey_UpdateFromDataResult;
      return $this;
    }

}
