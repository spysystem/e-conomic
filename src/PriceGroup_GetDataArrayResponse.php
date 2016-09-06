<?php

namespace Economic;

class PriceGroup_GetDataArrayResponse
{

    /**
     * @var ArrayOfPriceGroupData $PriceGroup_GetDataArrayResult
     */
    protected $PriceGroup_GetDataArrayResult = null;

    /**
     * @param ArrayOfPriceGroupData $PriceGroup_GetDataArrayResult
     */
    public function __construct($PriceGroup_GetDataArrayResult)
    {
      $this->PriceGroup_GetDataArrayResult = $PriceGroup_GetDataArrayResult;
    }

    /**
     * @return ArrayOfPriceGroupData
     */
    public function getPriceGroup_GetDataArrayResult()
    {
      return $this->PriceGroup_GetDataArrayResult;
    }

    /**
     * @param ArrayOfPriceGroupData $PriceGroup_GetDataArrayResult
     * @return \Economic\PriceGroup_GetDataArrayResponse
     */
    public function setPriceGroup_GetDataArrayResult($PriceGroup_GetDataArrayResult)
    {
      $this->PriceGroup_GetDataArrayResult = $PriceGroup_GetDataArrayResult;
      return $this;
    }

}
