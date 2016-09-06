<?php

namespace Economic;

class Product_GetUnitResponse
{

    /**
     * @var UnitHandle $Product_GetUnitResult
     */
    protected $Product_GetUnitResult = null;

    /**
     * @param UnitHandle $Product_GetUnitResult
     */
    public function __construct($Product_GetUnitResult)
    {
      $this->Product_GetUnitResult = $Product_GetUnitResult;
    }

    /**
     * @return UnitHandle
     */
    public function getProduct_GetUnitResult()
    {
      return $this->Product_GetUnitResult;
    }

    /**
     * @param UnitHandle $Product_GetUnitResult
     * @return \Economic\Product_GetUnitResponse
     */
    public function setProduct_GetUnitResult($Product_GetUnitResult)
    {
      $this->Product_GetUnitResult = $Product_GetUnitResult;
      return $this;
    }

}
