<?php

namespace Economic;

class PriceGroup_GetNumberResponse
{

    /**
     * @var int $PriceGroup_GetNumberResult
     */
    protected $PriceGroup_GetNumberResult = null;

    /**
     * @param int $PriceGroup_GetNumberResult
     */
    public function __construct($PriceGroup_GetNumberResult)
    {
      $this->PriceGroup_GetNumberResult = $PriceGroup_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getPriceGroup_GetNumberResult()
    {
      return $this->PriceGroup_GetNumberResult;
    }

    /**
     * @param int $PriceGroup_GetNumberResult
     * @return \Economic\PriceGroup_GetNumberResponse
     */
    public function setPriceGroup_GetNumberResult($PriceGroup_GetNumberResult)
    {
      $this->PriceGroup_GetNumberResult = $PriceGroup_GetNumberResult;
      return $this;
    }

}
