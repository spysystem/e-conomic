<?php

namespace Economic;

class ProductPrice_SetPrice
{

    /**
     * @var ProductPriceHandle $productPriceHandle
     */
    protected $productPriceHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param ProductPriceHandle $productPriceHandle
     * @param float $value
     */
    public function __construct($productPriceHandle, $value)
    {
      $this->productPriceHandle = $productPriceHandle;
      $this->value = $value;
    }

    /**
     * @return ProductPriceHandle
     */
    public function getProductPriceHandle()
    {
      return $this->productPriceHandle;
    }

    /**
     * @param ProductPriceHandle $productPriceHandle
     * @return \Economic\ProductPrice_SetPrice
     */
    public function setProductPriceHandle($productPriceHandle)
    {
      $this->productPriceHandle = $productPriceHandle;
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
     * @return \Economic\ProductPrice_SetPrice
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
