<?php

namespace Economic;

class PriceGroup_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfPriceGroupHandle $PriceGroup_CreateFromDataArrayResult
     */
    protected $PriceGroup_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_CreateFromDataArrayResult
     */
    public function __construct($PriceGroup_CreateFromDataArrayResult)
    {
      $this->PriceGroup_CreateFromDataArrayResult = $PriceGroup_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfPriceGroupHandle
     */
    public function getPriceGroup_CreateFromDataArrayResult()
    {
      return $this->PriceGroup_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_CreateFromDataArrayResult
     * @return \Economic\PriceGroup_CreateFromDataArrayResponse
     */
    public function setPriceGroup_CreateFromDataArrayResult($PriceGroup_CreateFromDataArrayResult)
    {
      $this->PriceGroup_CreateFromDataArrayResult = $PriceGroup_CreateFromDataArrayResult;
      return $this;
    }

}
