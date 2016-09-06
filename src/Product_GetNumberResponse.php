<?php

namespace Economic;

class Product_GetNumberResponse
{

    /**
     * @var string $Product_GetNumberResult
     */
    protected $Product_GetNumberResult = null;

    /**
     * @param string $Product_GetNumberResult
     */
    public function __construct($Product_GetNumberResult)
    {
      $this->Product_GetNumberResult = $Product_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getProduct_GetNumberResult()
    {
      return $this->Product_GetNumberResult;
    }

    /**
     * @param string $Product_GetNumberResult
     * @return \Economic\Product_GetNumberResponse
     */
    public function setProduct_GetNumberResult($Product_GetNumberResult)
    {
      $this->Product_GetNumberResult = $Product_GetNumberResult;
      return $this;
    }

}
