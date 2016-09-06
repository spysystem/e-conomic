<?php

namespace Economic;

class Product_GetBarCodeResponse
{

    /**
     * @var string $Product_GetBarCodeResult
     */
    protected $Product_GetBarCodeResult = null;

    /**
     * @param string $Product_GetBarCodeResult
     */
    public function __construct($Product_GetBarCodeResult)
    {
      $this->Product_GetBarCodeResult = $Product_GetBarCodeResult;
    }

    /**
     * @return string
     */
    public function getProduct_GetBarCodeResult()
    {
      return $this->Product_GetBarCodeResult;
    }

    /**
     * @param string $Product_GetBarCodeResult
     * @return \Economic\Product_GetBarCodeResponse
     */
    public function setProduct_GetBarCodeResult($Product_GetBarCodeResult)
    {
      $this->Product_GetBarCodeResult = $Product_GetBarCodeResult;
      return $this;
    }

}
