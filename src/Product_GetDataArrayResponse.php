<?php

namespace Economic;

class Product_GetDataArrayResponse
{

    /**
     * @var ArrayOfProductData $Product_GetDataArrayResult
     */
    protected $Product_GetDataArrayResult = null;

    /**
     * @param ArrayOfProductData $Product_GetDataArrayResult
     */
    public function __construct($Product_GetDataArrayResult)
    {
      $this->Product_GetDataArrayResult = $Product_GetDataArrayResult;
    }

    /**
     * @return ArrayOfProductData
     */
    public function getProduct_GetDataArrayResult()
    {
      return $this->Product_GetDataArrayResult;
    }

    /**
     * @param ArrayOfProductData $Product_GetDataArrayResult
     * @return \Economic\Product_GetDataArrayResponse
     */
    public function setProduct_GetDataArrayResult($Product_GetDataArrayResult)
    {
      $this->Product_GetDataArrayResult = $Product_GetDataArrayResult;
      return $this;
    }

}
