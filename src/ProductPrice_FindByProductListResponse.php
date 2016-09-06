<?php

namespace Economic;

class ProductPrice_FindByProductListResponse
{

    /**
     * @var ArrayOfProductPriceHandle $ProductPrice_FindByProductListResult
     */
    protected $ProductPrice_FindByProductListResult = null;

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_FindByProductListResult
     */
    public function __construct($ProductPrice_FindByProductListResult)
    {
      $this->ProductPrice_FindByProductListResult = $ProductPrice_FindByProductListResult;
    }

    /**
     * @return ArrayOfProductPriceHandle
     */
    public function getProductPrice_FindByProductListResult()
    {
      return $this->ProductPrice_FindByProductListResult;
    }

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_FindByProductListResult
     * @return \Economic\ProductPrice_FindByProductListResponse
     */
    public function setProductPrice_FindByProductListResult($ProductPrice_FindByProductListResult)
    {
      $this->ProductPrice_FindByProductListResult = $ProductPrice_FindByProductListResult;
      return $this;
    }

}
