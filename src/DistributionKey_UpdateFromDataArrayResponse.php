<?php

namespace Economic;

class DistributionKey_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfDistributionKeyHandle $DistributionKey_UpdateFromDataArrayResult
     */
    protected $DistributionKey_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_UpdateFromDataArrayResult
     */
    public function __construct($DistributionKey_UpdateFromDataArrayResult)
    {
      $this->DistributionKey_UpdateFromDataArrayResult = $DistributionKey_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDistributionKeyHandle
     */
    public function getDistributionKey_UpdateFromDataArrayResult()
    {
      return $this->DistributionKey_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_UpdateFromDataArrayResult
     * @return \Economic\DistributionKey_UpdateFromDataArrayResponse
     */
    public function setDistributionKey_UpdateFromDataArrayResult($DistributionKey_UpdateFromDataArrayResult)
    {
      $this->DistributionKey_UpdateFromDataArrayResult = $DistributionKey_UpdateFromDataArrayResult;
      return $this;
    }

}
