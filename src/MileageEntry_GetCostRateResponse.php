<?php

namespace Economic;

class MileageEntry_GetCostRateResponse
{

    /**
     * @var float $MileageEntry_GetCostRateResult
     */
    protected $MileageEntry_GetCostRateResult = null;

    /**
     * @param float $MileageEntry_GetCostRateResult
     */
    public function __construct($MileageEntry_GetCostRateResult)
    {
      $this->MileageEntry_GetCostRateResult = $MileageEntry_GetCostRateResult;
    }

    /**
     * @return float
     */
    public function getMileageEntry_GetCostRateResult()
    {
      return $this->MileageEntry_GetCostRateResult;
    }

    /**
     * @param float $MileageEntry_GetCostRateResult
     * @return \Economic\MileageEntry_GetCostRateResponse
     */
    public function setMileageEntry_GetCostRateResult($MileageEntry_GetCostRateResult)
    {
      $this->MileageEntry_GetCostRateResult = $MileageEntry_GetCostRateResult;
      return $this;
    }

}
