<?php

namespace Economic;

class ProductGroup_SetName
{

    /**
     * @var ProductGroupHandle $productGroupHandle
     */
    protected $productGroupHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param ProductGroupHandle $productGroupHandle
     * @param string $value
     */
    public function __construct($productGroupHandle, $value)
    {
      $this->productGroupHandle = $productGroupHandle;
      $this->value = $value;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroupHandle()
    {
      return $this->productGroupHandle;
    }

    /**
     * @param ProductGroupHandle $productGroupHandle
     * @return \Economic\ProductGroup_SetName
     */
    public function setProductGroupHandle($productGroupHandle)
    {
      $this->productGroupHandle = $productGroupHandle;
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
     * @return \Economic\ProductGroup_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
