<?php

namespace Economic;

class DistributionKey_FindByNameResponse
{

    /**
     * @var ArrayOfDistributionKeyHandle $DistributionKey_FindByNameResult
     */
    protected $DistributionKey_FindByNameResult = null;

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_FindByNameResult
     */
    public function __construct($DistributionKey_FindByNameResult)
    {
      $this->DistributionKey_FindByNameResult = $DistributionKey_FindByNameResult;
    }

    /**
     * @return ArrayOfDistributionKeyHandle
     */
    public function getDistributionKey_FindByNameResult()
    {
      return $this->DistributionKey_FindByNameResult;
    }

    /**
     * @param ArrayOfDistributionKeyHandle $DistributionKey_FindByNameResult
     * @return \Economic\DistributionKey_FindByNameResponse
     */
    public function setDistributionKey_FindByNameResult($DistributionKey_FindByNameResult)
    {
      $this->DistributionKey_FindByNameResult = $DistributionKey_FindByNameResult;
      return $this;
    }

}
