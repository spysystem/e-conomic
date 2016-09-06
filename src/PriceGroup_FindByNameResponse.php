<?php

namespace Economic;

class PriceGroup_FindByNameResponse
{

    /**
     * @var ArrayOfPriceGroupHandle $PriceGroup_FindByNameResult
     */
    protected $PriceGroup_FindByNameResult = null;

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_FindByNameResult
     */
    public function __construct($PriceGroup_FindByNameResult)
    {
      $this->PriceGroup_FindByNameResult = $PriceGroup_FindByNameResult;
    }

    /**
     * @return ArrayOfPriceGroupHandle
     */
    public function getPriceGroup_FindByNameResult()
    {
      return $this->PriceGroup_FindByNameResult;
    }

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_FindByNameResult
     * @return \Economic\PriceGroup_FindByNameResponse
     */
    public function setPriceGroup_FindByNameResult($PriceGroup_FindByNameResult)
    {
      $this->PriceGroup_FindByNameResult = $PriceGroup_FindByNameResult;
      return $this;
    }

}
