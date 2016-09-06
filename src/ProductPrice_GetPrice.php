<?php

namespace Economic;

class ProductPrice_GetPrice
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
     * @return \Economic\ProductPrice_GetPrice
     */
    public function setProductPriceHandle($productPriceHandle)
    {
      $this->productPriceHandle = $productPriceHandle;
      return $this;
    }

}
