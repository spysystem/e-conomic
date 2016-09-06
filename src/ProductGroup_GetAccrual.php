<?php

namespace Economic;

class ProductGroup_GetAccrual
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
     * @return \Economic\ProductGroup_GetAccrual
     */
    public function setProductGroupHandle($productGroupHandle)
    {
      $this->productGroupHandle = $productGroupHandle;
      return $this;
    }

}
