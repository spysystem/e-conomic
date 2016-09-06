<?php

namespace Economic;

class Product_FindByBarCodeResponse
{

    /**
     * @var ArrayOfProductHandle $Product_FindByBarCodeResult
     */
    protected $Product_FindByBarCodeResult = null;

    /**
     * @param ArrayOfProductHandle $Product_FindByBarCodeResult
     */
    public function __construct($Product_FindByBarCodeResult)
    {
      $this->Product_FindByBarCodeResult = $Product_FindByBarCodeResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProduct_FindByBarCodeResult()
    {
      return $this->Product_FindByBarCodeResult;
    }

    /**
     * @param ArrayOfProductHandle $Product_FindByBarCodeResult
     * @return \Economic\Product_FindByBarCodeResponse
     */
    public function setProduct_FindByBarCodeResult($Product_FindByBarCodeResult)
    {
      $this->Product_FindByBarCodeResult = $Product_FindByBarCodeResult;
      return $this;
    }

}
