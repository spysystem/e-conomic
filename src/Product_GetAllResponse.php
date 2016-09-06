<?php

namespace Economic;

class Product_GetAllResponse
{

    /**
     * @var ArrayOfProductHandle $Product_GetAllResult
     */
    protected $Product_GetAllResult = null;

    /**
     * @param ArrayOfProductHandle $Product_GetAllResult
     */
    public function __construct($Product_GetAllResult)
    {
      $this->Product_GetAllResult = $Product_GetAllResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_GetAllResult()
    {
      return $this->Product_GetAllResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_GetAllResult
     * @return \Economic\Product_GetAllResponse
     */
    public function setProduct_GetAllResult($Product_GetAllResult)
    {
      $this->Product_GetAllResult = $Product_GetAllResult;
      return $this;
    }

}
