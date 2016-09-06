<?php

namespace Economic;

class PriceGroup_FindByNumberResponse
{

    /**
     * @var PriceGroupHandle $PriceGroup_FindByNumberResult
     */
    protected $PriceGroup_FindByNumberResult = null;

    /**
     * @param PriceGroupHandle $PriceGroup_FindByNumberResult
     */
    public function __construct($PriceGroup_FindByNumberResult)
    {
      $this->PriceGroup_FindByNumberResult = $PriceGroup_FindByNumberResult;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getPriceGroup_FindByNumberResult()
    {
      return $this->PriceGroup_FindByNumberResult;
    }

    /**
     * @param PriceGroupHandle $PriceGroup_FindByNumberResult
     * @return \Economic\PriceGroup_FindByNumberResponse
     */
    public function setPriceGroup_FindByNumberResult($PriceGroup_FindByNumberResult)
    {
      $this->PriceGroup_FindByNumberResult = $PriceGroup_FindByNumberResult;
      return $this;
    }

}
