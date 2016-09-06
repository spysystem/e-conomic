<?php

namespace Economic;

class PriceGroup_UpdateFromDataResponse
{

    /**
     * @var PriceGroupHandle $PriceGroup_UpdateFromDataResult
     */
    protected $PriceGroup_UpdateFromDataResult = null;

    /**
     * @param PriceGroupHandle $PriceGroup_UpdateFromDataResult
     */
    public function __construct($PriceGroup_UpdateFromDataResult)
    {
      $this->PriceGroup_UpdateFromDataResult = $PriceGroup_UpdateFromDataResult;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getPriceGroup_UpdateFromDataResult()
    {
      return $this->PriceGroup_UpdateFromDataResult;
    }

    /**
     * @param PriceGroupHandle $PriceGroup_UpdateFromDataResult
     * @return \Economic\PriceGroup_UpdateFromDataResponse
     */
    public function setPriceGroup_UpdateFromDataResult($PriceGroup_UpdateFromDataResult)
    {
      $this->PriceGroup_UpdateFromDataResult = $PriceGroup_UpdateFromDataResult;
      return $this;
    }

}
