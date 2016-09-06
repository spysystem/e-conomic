<?php

namespace Economic;

class MileageEntry_GetSalesPriceResponse
{

    /**
     * @var float $MileageEntry_GetSalesPriceResult
     */
    protected $MileageEntry_GetSalesPriceResult = null;

    /**
     * @param float $MileageEntry_GetSalesPriceResult
     */
    public function __construct($MileageEntry_GetSalesPriceResult)
    {
      $this->MileageEntry_GetSalesPriceResult = $MileageEntry_GetSalesPriceResult;
    }

    /**
     * @return float
     */
    public function getMileageEntry_GetSalesPriceResult()
    {
      return $this->MileageEntry_GetSalesPriceResult;
    }

    /**
     * @param float $MileageEntry_GetSalesPriceResult
     * @return \Economic\MileageEntry_GetSalesPriceResponse
     */
    public function setMileageEntry_GetSalesPriceResult($MileageEntry_GetSalesPriceResult)
    {
      $this->MileageEntry_GetSalesPriceResult = $MileageEntry_GetSalesPriceResult;
      return $this;
    }

}
