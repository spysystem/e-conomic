<?php

namespace Economic;

class Product_FindByNumberResponse
{

    /**
     * @var ProductHandle $Product_FindByNumberResult
     */
    protected $Product_FindByNumberResult = null;

    /**
     * @param ProductHandle $Product_FindByNumberResult
     */
    public function __construct($Product_FindByNumberResult)
    {
      $this->Product_FindByNumberResult = $Product_FindByNumberResult;
    }

    /**
     * @return ProductHandle
     */
    public function getProduct_FindByNumberResult()
    {
      return $this->Product_FindByNumberResult;
    }

    /**
     * @param ProductHandle $Product_FindByNumberResult
     * @return \Economic\Product_FindByNumberResponse
     */
    public function setProduct_FindByNumberResult($Product_FindByNumberResult)
    {
      $this->Product_FindByNumberResult = $Product_FindByNumberResult;
      return $this;
    }

}
