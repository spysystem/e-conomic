<?php

namespace Economic;

class Product_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfProductHandle $Product_CreateFromDataArrayResult
     */
    protected $Product_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfProductHandle $Product_CreateFromDataArrayResult
     */
    public function __construct($Product_CreateFromDataArrayResult)
    {
      $this->Product_CreateFromDataArrayResult = $Product_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_CreateFromDataArrayResult()
    {
      return $this->Product_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_CreateFromDataArrayResult
     * @return \Economic\Product_CreateFromDataArrayResponse
     */
    public function setProduct_CreateFromDataArrayResult($Product_CreateFromDataArrayResult)
    {
      $this->Product_CreateFromDataArrayResult = $Product_CreateFromDataArrayResult;
      return $this;
    }

}
