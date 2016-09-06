<?php

namespace Economic;

class MileageEntry_GetDistanceResponse
{

    /**
     * @var float $MileageEntry_GetDistanceResult
     */
    protected $MileageEntry_GetDistanceResult = null;

    /**
     * @param float $MileageEntry_GetDistanceResult
     */
    public function __construct($MileageEntry_GetDistanceResult)
    {
      $this->MileageEntry_GetDistanceResult = $MileageEntry_GetDistanceResult;
    }

    /**
     * @return float
     */
    public function getMileageEntry_GetDistanceResult()
    {
      return $this->MileageEntry_GetDistanceResult;
    }

    /**
     * @param float $MileageEntry_GetDistanceResult
     * @return \Economic\MileageEntry_GetDistanceResponse
     */
    public function setMileageEntry_GetDistanceResult($MileageEntry_GetDistanceResult)
    {
      $this->MileageEntry_GetDistanceResult = $MileageEntry_GetDistanceResult;
      return $this;
    }

}
