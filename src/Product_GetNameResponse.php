<?php

namespace Economic;

class Product_GetNameResponse
{

    /**
     * @var string $Product_GetNameResult
     */
    protected $Product_GetNameResult = null;

    /**
     * @param string $Product_GetNameResult
     */
    public function __construct($Product_GetNameResult)
    {
      $this->Product_GetNameResult = $Product_GetNameResult;
    }

    /**
     * @return string
     */
    public function getProduct_GetNameResult()
    {
      return $this->Product_GetNameResult;
    }

    /**
     * @param string $Product_GetNameResult
     * @return \Economic\Product_GetNameResponse
     */
    public function setProduct_GetNameResult($Product_GetNameResult)
    {
      $this->Product_GetNameResult = $Product_GetNameResult;
      return $this;
    }

}
