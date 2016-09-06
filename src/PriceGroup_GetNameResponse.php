<?php

namespace Economic;

class PriceGroup_GetNameResponse
{

    /**
     * @var string $PriceGroup_GetNameResult
     */
    protected $PriceGroup_GetNameResult = null;

    /**
     * @param string $PriceGroup_GetNameResult
     */
    public function __construct($PriceGroup_GetNameResult)
    {
      $this->PriceGroup_GetNameResult = $PriceGroup_GetNameResult;
    }

    /**
     * @return string
     */
    public function getPriceGroup_GetNameResult()
    {
      return $this->PriceGroup_GetNameResult;
    }

    /**
     * @param string $PriceGroup_GetNameResult
     * @return \Economic\PriceGroup_GetNameResponse
     */
    public function setPriceGroup_GetNameResult($PriceGroup_GetNameResult)
    {
      $this->PriceGroup_GetNameResult = $PriceGroup_GetNameResult;
      return $this;
    }

}
