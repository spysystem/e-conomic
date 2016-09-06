<?php

namespace Economic;

class Product_CreateResponse
{

    /**
     * @var ProductHandle $Product_CreateResult
     */
    protected $Product_CreateResult = null;

    /**
     * @param ProductHandle $Product_CreateResult
     */
    public function __construct($Product_CreateResult)
    {
      $this->Product_CreateResult = $Product_CreateResult;
    }

    /**
     * @return ProductHandle
     */
    public function getProduct_CreateResult()
    {
      return $this->Product_CreateResult;
    }

    /**
     * @param ProductHandle $Product_CreateResult
     * @return \Economic\Product_CreateResponse
     */
    public function setProduct_CreateResult($Product_CreateResult)
    {
      $this->Product_CreateResult = $Product_CreateResult;
      return $this;
    }

}
