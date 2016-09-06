<?php

namespace Economic;

class Product_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfProductHandle $Product_UpdateFromDataArrayResult
     */
    protected $Product_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfProductHandle $Product_UpdateFromDataArrayResult
     */
    public function __construct($Product_UpdateFromDataArrayResult)
    {
      $this->Product_UpdateFromDataArrayResult = $Product_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_UpdateFromDataArrayResult()
    {
      return $this->Product_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_UpdateFromDataArrayResult
     * @return \Economic\Product_UpdateFromDataArrayResponse
     */
    public function setProduct_UpdateFromDataArrayResult($Product_UpdateFromDataArrayResult)
    {
      $this->Product_UpdateFromDataArrayResult = $Product_UpdateFromDataArrayResult;
      return $this;
    }

}
