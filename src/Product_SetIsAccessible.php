<?php

namespace Economic;

class Product_SetIsAccessible
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param ProductHandle $productHandle
     * @param boolean $value
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
     * @return \Economic\Product_SetIsAccessible
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\Product_SetIsAccessible
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
