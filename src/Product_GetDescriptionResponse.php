<?php

namespace Economic;

class Product_GetDescriptionResponse
{

    /**
     * @var string $Product_GetDescriptionResult
     */
    protected $Product_GetDescriptionResult = null;

    /**
     * @param string $Product_GetDescriptionResult
     */
    public function __construct($Product_GetDescriptionResult)
    {
      $this->Product_GetDescriptionResult = $Product_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getProduct_GetDescriptionResult()
    {
      return $this->Product_GetDescriptionResult;
    }

    /**
     * @param string $Product_GetDescriptionResult
     * @return \Economic\Product_GetDescriptionResponse
     */
    public function setProduct_GetDescriptionResult($Product_GetDescriptionResult)
    {
      $this->Product_GetDescriptionResult = $Product_GetDescriptionResult;
      return $this;
    }

}
