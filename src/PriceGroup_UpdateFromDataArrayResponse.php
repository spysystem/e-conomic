<?php

namespace Economic;

class PriceGroup_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfPriceGroupHandle $PriceGroup_UpdateFromDataArrayResult
     */
    protected $PriceGroup_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_UpdateFromDataArrayResult
     */
    public function __construct($PriceGroup_UpdateFromDataArrayResult)
    {
      $this->PriceGroup_UpdateFromDataArrayResult = $PriceGroup_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfPriceGroupHandle
     */
    public function getPriceGroup_UpdateFromDataArrayResult()
    {
      return $this->PriceGroup_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_UpdateFromDataArrayResult
     * @return \Economic\PriceGroup_UpdateFromDataArrayResponse
     */
    public function setPriceGroup_UpdateFromDataArrayResult($PriceGroup_UpdateFromDataArrayResult)
    {
      $this->PriceGroup_UpdateFromDataArrayResult = $PriceGroup_UpdateFromDataArrayResult;
      return $this;
    }

}
