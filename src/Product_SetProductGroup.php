<?php

namespace Economic;

class Product_SetProductGroup
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @var ProductGroupHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param ProductHandle $productHandle
     * @param ProductGroupHandle $valueHandle
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
     * @return \Economic\Product_SetProductGroup
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProductGroupHandle $valueHandle
     * @return \Economic\Product_SetProductGroup
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
