<?php

namespace Economic;

class Product_GetIsAccessibleResponse
{

    /**
     * @var boolean $Product_GetIsAccessibleResult
     */
    protected $Product_GetIsAccessibleResult = null;

    /**
     * @param boolean $Product_GetIsAccessibleResult
     */
    public function __construct($Product_GetIsAccessibleResult)
    {
      $this->Product_GetIsAccessibleResult = $Product_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getProduct_GetIsAccessibleResult()
    {
      return $this->Product_GetIsAccessibleResult;
    }

    /**
     * @param boolean $Product_GetIsAccessibleResult
     * @return \Economic\Product_GetIsAccessibleResponse
     */
    public function setProduct_GetIsAccessibleResult($Product_GetIsAccessibleResult)
    {
      $this->Product_GetIsAccessibleResult = $Product_GetIsAccessibleResult;
      return $this;
    }

}
