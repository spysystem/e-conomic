<?php

namespace Economic;

class DistributionKey_GetNumberResponse
{

    /**
     * @var int $DistributionKey_GetNumberResult
     */
    protected $DistributionKey_GetNumberResult = null;

    /**
     * @param int $DistributionKey_GetNumberResult
     */
    public function __construct($DistributionKey_GetNumberResult)
    {
      $this->DistributionKey_GetNumberResult = $DistributionKey_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getDistributionKey_GetNumberResult()
    {
      return $this->DistributionKey_GetNumberResult;
    }

    /**
     * @param int $DistributionKey_GetNumberResult
     * @return \Economic\DistributionKey_GetNumberResponse
     */
    public function setDistributionKey_GetNumberResult($DistributionKey_GetNumberResult)
    {
      $this->DistributionKey_GetNumberResult = $DistributionKey_GetNumberResult;
      return $this;
    }

}
