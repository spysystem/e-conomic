<?php

namespace Economic;

class PriceGroup_GetPriceResponse
{

    /**
     * @var float $PriceGroup_GetPriceResult
     */
    protected $PriceGroup_GetPriceResult = null;

    /**
     * @param float $PriceGroup_GetPriceResult
     */
    public function __construct($PriceGroup_GetPriceResult)
    {
      $this->PriceGroup_GetPriceResult = $PriceGroup_GetPriceResult;
    }

    /**
     * @return float
     */
    public function getPriceGroup_GetPriceResult()
    {
      return $this->PriceGroup_GetPriceResult;
    }

    /**
     * @param float $PriceGroup_GetPriceResult
     * @return \Economic\PriceGroup_GetPriceResponse
     */
    public function setPriceGroup_GetPriceResult($PriceGroup_GetPriceResult)
    {
      $this->PriceGroup_GetPriceResult = $PriceGroup_GetPriceResult;
      return $this;
    }

}
