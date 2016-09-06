<?php

namespace Economic;

class Product_GetDataResponse
{

    /**
     * @var ProductData $Product_GetDataResult
     */
    protected $Product_GetDataResult = null;

    /**
     * @param ProductData $Product_GetDataResult
     */
    public function __construct($Product_GetDataResult)
    {
      $this->Product_GetDataResult = $Product_GetDataResult;
    }

    /**
     * @return ProductData
     */
    public function getProduct_GetDataResult()
    {
      return $this->Product_GetDataResult;
    }

    /**
     * @param ProductData $Product_GetDataResult
     * @return \Economic\Product_GetDataResponse
     */
    public function setProduct_GetDataResult($Product_GetDataResult)
    {
      $this->Product_GetDataResult = $Product_GetDataResult;
      return $this;
    }

}
