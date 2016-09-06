<?php

namespace Economic;

class Product_GetAllAccessibleResponse
{

    /**
     * @var ArrayOfProductHandle $Product_GetAllAccessibleResult
     */
    protected $Product_GetAllAccessibleResult = null;

    /**
     * @param ArrayOfProductHandle $Product_GetAllAccessibleResult
     */
    public function __construct($Product_GetAllAccessibleResult)
    {
      $this->Product_GetAllAccessibleResult = $Product_GetAllAccessibleResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_GetAllAccessibleResult()
    {
      return $this->Product_GetAllAccessibleResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_GetAllAccessibleResult
     * @return \Economic\Product_GetAllAccessibleResponse
     */
    public function setProduct_GetAllAccessibleResult($Product_GetAllAccessibleResult)
    {
      $this->Product_GetAllAccessibleResult = $Product_GetAllAccessibleResult;
      return $this;
    }

}
