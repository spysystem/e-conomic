<?php

namespace Economic;

class Product_UpdateFromDataResponse
{

    /**
     * @var ProductHandle $Product_UpdateFromDataResult
     */
    protected $Product_UpdateFromDataResult = null;

    /**
     * @param ProductHandle $Product_UpdateFromDataResult
     */
    public function __construct($Product_UpdateFromDataResult)
    {
      $this->Product_UpdateFromDataResult = $Product_UpdateFromDataResult;
    }

    /**
     * @return ProductHandle
     */
    public function getProduct_UpdateFromDataResult()
    {
      return $this->Product_UpdateFromDataResult;
    }

    /**
     * @param ProductHandle $Product_UpdateFromDataResult
     * @return \Economic\Product_UpdateFromDataResponse
     */
    public function setProduct_UpdateFromDataResult($Product_UpdateFromDataResult)
    {
      $this->Product_UpdateFromDataResult = $Product_UpdateFromDataResult;
      return $this;
    }

}
