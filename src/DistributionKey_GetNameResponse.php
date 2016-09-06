<?php

namespace Economic;

class DistributionKey_GetNameResponse
{

    /**
     * @var string $DistributionKey_GetNameResult
     */
    protected $DistributionKey_GetNameResult = null;

    /**
     * @param string $DistributionKey_GetNameResult
     */
    public function __construct($DistributionKey_GetNameResult)
    {
      $this->DistributionKey_GetNameResult = $DistributionKey_GetNameResult;
    }

    /**
     * @return string
     */
    public function getDistributionKey_GetNameResult()
    {
      return $this->DistributionKey_GetNameResult;
    }

    /**
     * @param string $DistributionKey_GetNameResult
     * @return \Economic\DistributionKey_GetNameResponse
     */
    public function setDistributionKey_GetNameResult($DistributionKey_GetNameResult)
    {
      $this->DistributionKey_GetNameResult = $DistributionKey_GetNameResult;
      return $this;
    }

}
