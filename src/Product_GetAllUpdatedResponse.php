<?php

namespace Economic;

class Product_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfProductHandle $Product_GetAllUpdatedResult
     */
    protected $Product_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfProductHandle $Product_GetAllUpdatedResult
     */
    public function __construct($Product_GetAllUpdatedResult)
    {
      $this->Product_GetAllUpdatedResult = $Product_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_GetAllUpdatedResult()
    {
      return $this->Product_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_GetAllUpdatedResult
     * @return \Economic\Product_GetAllUpdatedResponse
     */
    public function setProduct_GetAllUpdatedResult($Product_GetAllUpdatedResult)
    {
      $this->Product_GetAllUpdatedResult = $Product_GetAllUpdatedResult;
      return $this;
    }

}
