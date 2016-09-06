<?php

namespace Economic;

class DistributionKey_FindByNumberResponse
{

    /**
     * @var DistributionKeyHandle $DistributionKey_FindByNumberResult
     */
    protected $DistributionKey_FindByNumberResult = null;

    /**
     * @param DistributionKeyHandle $DistributionKey_FindByNumberResult
     */
    public function __construct($DistributionKey_FindByNumberResult)
    {
      $this->DistributionKey_FindByNumberResult = $DistributionKey_FindByNumberResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getDistributionKey_FindByNumberResult()
    {
      return $this->DistributionKey_FindByNumberResult;
    }

    /**
     * @param DistributionKeyHandle $DistributionKey_FindByNumberResult
     * @return \Economic\DistributionKey_FindByNumberResponse
     */
    public function setDistributionKey_FindByNumberResult($DistributionKey_FindByNumberResult)
    {
      $this->DistributionKey_FindByNumberResult = $DistributionKey_FindByNumberResult;
      return $this;
    }

}
