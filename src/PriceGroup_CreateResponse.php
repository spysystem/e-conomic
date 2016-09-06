<?php

namespace Economic;

class PriceGroup_CreateResponse
{

    /**
     * @var PriceGroupHandle $PriceGroup_CreateResult
     */
    protected $PriceGroup_CreateResult = null;

    /**
     * @param PriceGroupHandle $PriceGroup_CreateResult
     */
    public function __construct($PriceGroup_CreateResult)
    {
      $this->PriceGroup_CreateResult = $PriceGroup_CreateResult;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getPriceGroup_CreateResult()
    {
      return $this->PriceGroup_CreateResult;
    }

    /**
     * @param PriceGroupHandle $PriceGroup_CreateResult
     * @return \Economic\PriceGroup_CreateResponse
     */
    public function setPriceGroup_CreateResult($PriceGroup_CreateResult)
    {
      $this->PriceGroup_CreateResult = $PriceGroup_CreateResult;
      return $this;
    }

}
