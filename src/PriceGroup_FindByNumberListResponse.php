<?php

namespace Economic;

class PriceGroup_FindByNumberListResponse
{

    /**
     * @var ArrayOfPriceGroupHandle $PriceGroup_FindByNumberListResult
     */
    protected $PriceGroup_FindByNumberListResult = null;

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_FindByNumberListResult
     */
    public function __construct($PriceGroup_FindByNumberListResult)
    {
      $this->PriceGroup_FindByNumberListResult = $PriceGroup_FindByNumberListResult;
    }

    /**
     * @return ArrayOfPriceGroupHandle
     */
    public function getPriceGroup_FindByNumberListResult()
    {
      return $this->PriceGroup_FindByNumberListResult;
    }

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_FindByNumberListResult
     * @return \Economic\PriceGroup_FindByNumberListResponse
     */
    public function setPriceGroup_FindByNumberListResult($PriceGroup_FindByNumberListResult)
    {
      $this->PriceGroup_FindByNumberListResult = $PriceGroup_FindByNumberListResult;
      return $this;
    }

}
