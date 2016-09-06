<?php

namespace Economic;

class PriceGroup_GetAllResponse
{

    /**
     * @var ArrayOfPriceGroupHandle $PriceGroup_GetAllResult
     */
    protected $PriceGroup_GetAllResult = null;

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_GetAllResult
     */
    public function __construct($PriceGroup_GetAllResult)
    {
      $this->PriceGroup_GetAllResult = $PriceGroup_GetAllResult;
    }

    /**
     * @return ArrayOfPriceGroupHandle
     */
    public function getPriceGroup_GetAllResult()
    {
      return $this->PriceGroup_GetAllResult;
    }

    /**
     * @param ArrayOfPriceGroupHandle $PriceGroup_GetAllResult
     * @return \Economic\PriceGroup_GetAllResponse
     */
    public function setPriceGroup_GetAllResult($PriceGroup_GetAllResult)
    {
      $this->PriceGroup_GetAllResult = $PriceGroup_GetAllResult;
      return $this;
    }

}
