<?php

namespace Economic;

class Product_SetBarCode
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param ProductHandle $productHandle
     * @param string $value
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
     * @return \Economic\Product_SetBarCode
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Product_SetBarCode
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
