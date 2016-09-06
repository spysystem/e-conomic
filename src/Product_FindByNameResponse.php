<?php

namespace Economic;

class Product_FindByNameResponse
{

    /**
     * @var ArrayOfProductHandle $Product_FindByNameResult
     */
    protected $Product_FindByNameResult = null;

    /**
     * @param ArrayOfProductHandle $Product_FindByNameResult
     */
    public function __construct($Product_FindByNameResult)
    {
      $this->Product_FindByNameResult = $Product_FindByNameResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_FindByNameResult()
    {
      return $this->Product_FindByNameResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_FindByNameResult
     * @return \Economic\Product_FindByNameResponse
     */
    public function setProduct_FindByNameResult($Product_FindByNameResult)
    {
      $this->Product_FindByNameResult = $Product_FindByNameResult;
      return $this;
    }

}
