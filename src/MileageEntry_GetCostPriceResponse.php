<?php

namespace Economic;

class MileageEntry_GetCostPriceResponse
{

    /**
     * @var float $MileageEntry_GetCostPriceResult
     */
    protected $MileageEntry_GetCostPriceResult = null;

    /**
     * @param float $MileageEntry_GetCostPriceResult
     */
    public function __construct($MileageEntry_GetCostPriceResult)
    {
      $this->MileageEntry_GetCostPriceResult = $MileageEntry_GetCostPriceResult;
    }

    /**
     * @return float
     */
    public function getMileageEntry_GetCostPriceResult()
    {
      return $this->MileageEntry_GetCostPriceResult;
    }

    /**
     * @param float $MileageEntry_GetCostPriceResult
     * @return \Economic\MileageEntry_GetCostPriceResponse
     */
    public function setMileageEntry_GetCostPriceResult($MileageEntry_GetCostPriceResult)
    {
      $this->MileageEntry_GetCostPriceResult = $MileageEntry_GetCostPriceResult;
      return $this;
    }

}
