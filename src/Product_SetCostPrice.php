<?php

namespace Economic;

class Product_SetCostPrice
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param ProductHandle $productHandle
     * @param float $value
     */
    public function __construct($productHandle, $value)
    {
      $this->productHandle = $productHandle;
      $this->value = $value;
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
     * @return \Economic\Product_SetCostPrice
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\Product_SetCostPrice
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
