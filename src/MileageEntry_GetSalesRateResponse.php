<?php

namespace Economic;

class MileageEntry_GetSalesRateResponse
{

    /**
     * @var float $MileageEntry_GetSalesRateResult
     */
    protected $MileageEntry_GetSalesRateResult = null;

    /**
     * @param float $MileageEntry_GetSalesRateResult
     */
    public function __construct($MileageEntry_GetSalesRateResult)
    {
      $this->MileageEntry_GetSalesRateResult = $MileageEntry_GetSalesRateResult;
    }

    /**
     * @return float
     */
    public function getMileageEntry_GetSalesRateResult()
    {
      return $this->MileageEntry_GetSalesRateResult;
    }

    /**
     * @param float $MileageEntry_GetSalesRateResult
     * @return \Economic\MileageEntry_GetSalesRateResponse
     */
    public function setMileageEntry_GetSalesRateResult($MileageEntry_GetSalesRateResult)
    {
      $this->MileageEntry_GetSalesRateResult = $MileageEntry_GetSalesRateResult;
      return $this;
    }

}
