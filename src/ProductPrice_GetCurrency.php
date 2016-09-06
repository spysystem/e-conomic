<?php

namespace Economic;

class ProductPrice_GetCurrency
{

    /**
     * @var ProductPriceHandle $productPriceHandle
     */
    protected $productPriceHandle = null;

    /**
     * @param ProductPriceHandle $productPriceHandle
     */
    public function __construct($productPriceHandle)
    {
      $this->productPriceHandle = $productPriceHandle;
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
     * @return \Economic\ProductPrice_GetCurrency
     */
    public function setProductPriceHandle($productPriceHandle)
    {
      $this->productPriceHandle = $productPriceHandle;
      return $this;
    }

}
