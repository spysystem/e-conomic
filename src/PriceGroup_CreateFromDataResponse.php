<?php

namespace Economic;

class PriceGroup_CreateFromDataResponse
{

    /**
     * @var PriceGroupHandle $PriceGroup_CreateFromDataResult
     */
    protected $PriceGroup_CreateFromDataResult = null;

    /**
     * @param PriceGroupHandle $PriceGroup_CreateFromDataResult
     */
    public function __construct($PriceGroup_CreateFromDataResult)
    {
      $this->PriceGroup_CreateFromDataResult = $PriceGroup_CreateFromDataResult;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getPriceGroup_CreateFromDataResult()
    {
      return $this->PriceGroup_CreateFromDataResult;
    }

    /**
     * @param PriceGroupHandle $PriceGroup_CreateFromDataResult
     * @return \Economic\PriceGroup_CreateFromDataResponse
     */
    public function setPriceGroup_CreateFromDataResult($PriceGroup_CreateFromDataResult)
    {
      $this->PriceGroup_CreateFromDataResult = $PriceGroup_CreateFromDataResult;
      return $this;
    }

}
