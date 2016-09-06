<?php

namespace Economic;

class Product_FindByNumberListResponse
{

    /**
     * @var ArrayOfProductHandle $Product_FindByNumberListResult
     */
    protected $Product_FindByNumberListResult = null;

    /**
     * @param ArrayOfProductHandle $Product_FindByNumberListResult
     */
    public function __construct($Product_FindByNumberListResult)
    {
      $this->Product_FindByNumberListResult = $Product_FindByNumberListResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_FindByNumberListResult()
    {
      return $this->Product_FindByNumberListResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_FindByNumberListResult
     * @return \Economic\Product_FindByNumberListResponse
     */
    public function setProduct_FindByNumberListResult($Product_FindByNumberListResult)
    {
      $this->Product_FindByNumberListResult = $Product_FindByNumberListResult;
      return $this;
    }

}
