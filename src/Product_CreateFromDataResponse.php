<?php

namespace Economic;

class Product_CreateFromDataResponse
{

    /**
     * @var ProductHandle $Product_CreateFromDataResult
     */
    protected $Product_CreateFromDataResult = null;

    /**
     * @param ProductHandle $Product_CreateFromDataResult
     */
    public function __construct($Product_CreateFromDataResult)
    {
      $this->Product_CreateFromDataResult = $Product_CreateFromDataResult;
    }

    /**
     * @return ProductHandle
     */
    public function getProduct_CreateFromDataResult()
    {
      return $this->Product_CreateFromDataResult;
    }

    /**
     * @param ProductHandle $Product_CreateFromDataResult
     * @return \Economic\Product_CreateFromDataResponse
     */
    public function setProduct_CreateFromDataResult($Product_CreateFromDataResult)
    {
      $this->Product_CreateFromDataResult = $Product_CreateFromDataResult;
      return $this;
    }

}
