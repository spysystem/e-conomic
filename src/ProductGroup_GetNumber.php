<?php

namespace Economic;

class ProductGroup_GetNumber
{

    /**
     * @var ProductGroupHandle $productGroupHandle
     */
    protected $productGroupHandle = null;

    /**
     * @param ProductGroupHandle $productGroupHandle
     */
    public function __construct($productGroupHandle)
    {
      $this->productGroupHandle = $productGroupHandle;
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
     * @return \Economic\ProductGroup_GetNumber
     */
    public function setProductGroupHandle($productGroupHandle)
    {
      $this->productGroupHandle = $productGroupHandle;
      return $this;
    }

}
