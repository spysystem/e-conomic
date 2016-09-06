<?php

namespace Economic;

class Product_GetProductGroupResponse
{

    /**
     * @var ProductGroupHandle $Product_GetProductGroupResult
     */
    protected $Product_GetProductGroupResult = null;

    /**
     * @param ProductGroupHandle $Product_GetProductGroupResult
     */
    public function __construct($Product_GetProductGroupResult)
    {
      $this->Product_GetProductGroupResult = $Product_GetProductGroupResult;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProduct_GetProductGroupResult()
    {
      return $this->Product_GetProductGroupResult;
    }

    /**
     * @param ProductGroupHandle $Product_GetProductGroupResult
     * @return \Economic\Product_GetProductGroupResponse
     */
    public function setProduct_GetProductGroupResult($Product_GetProductGroupResult)
    {
      $this->Product_GetProductGroupResult = $Product_GetProductGroupResult;
      return $this;
    }

}
