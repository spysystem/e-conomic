<?php

namespace Economic;

class Entry_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $Entry_GetDistributionKeyResult
     */
    protected $Entry_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $Entry_GetDistributionKeyResult
     */
    public function __construct($Entry_GetDistributionKeyResult)
    {
      $this->Entry_GetDistributionKeyResult = $Entry_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getEntry_GetDistributionKeyResult()
    {
      return $this->Entry_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $Entry_GetDistributionKeyResult
     * @return \Economic\Entry_GetDistributionKeyResponse
     */
    public function setEntry_GetDistributionKeyResult($Entry_GetDistributionKeyResult)
    {
      $this->Entry_GetDistributionKeyResult = $Entry_GetDistributionKeyResult;
      return $this;
    }

}
