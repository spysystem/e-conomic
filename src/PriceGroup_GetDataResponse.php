<?php

namespace Economic;

class PriceGroup_GetDataResponse
{

    /**
     * @var PriceGroupData $PriceGroup_GetDataResult
     */
    protected $PriceGroup_GetDataResult = null;

    /**
     * @param PriceGroupData $PriceGroup_GetDataResult
     */
    public function __construct($PriceGroup_GetDataResult)
    {
      $this->PriceGroup_GetDataResult = $PriceGroup_GetDataResult;
    }

    /**
     * @return PriceGroupData
     */
    public function getPriceGroup_GetDataResult()
    {
      return $this->PriceGroup_GetDataResult;
    }

    /**
     * @param PriceGroupData $PriceGroup_GetDataResult
     * @return \Economic\PriceGroup_GetDataResponse
     */
    public function setPriceGroup_GetDataResult($PriceGroup_GetDataResult)
    {
      $this->PriceGroup_GetDataResult = $PriceGroup_GetDataResult;
      return $this;
    }

}
