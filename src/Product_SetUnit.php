<?php

namespace Economic;

class Product_SetUnit
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @var UnitHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param ProductHandle $productHandle
     * @param UnitHandle $valueHandle
     */
    public function __construct($productHandle, $valueHandle)
    {
      $this->productHandle = $productHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->productHandle;
    }

    /**
     * @param ProductHandle $productHandle
     * @return \Economic\Product_SetUnit
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param UnitHandle $valueHandle
     * @return \Economic\Product_SetUnit
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
