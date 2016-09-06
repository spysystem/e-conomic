<?php

namespace Economic;

class ProductGroup_GetProductsResponse
{

    /**
     * @var ArrayOfProductHandle $ProductGroup_GetProductsResult
     */
    protected $ProductGroup_GetProductsResult = null;

    /**
     * @param ArrayOfProductHandle $ProductGroup_GetProductsResult
     */
    public function __construct($ProductGroup_GetProductsResult)
    {
      $this->ProductGroup_GetProductsResult = $ProductGroup_GetProductsResult;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProductGroup_GetProductsResult()
    {
      return $this->ProductGroup_GetProductsResult;
    }

    /**
     * @param ArrayOfProductHandle $ProductGroup_GetProductsResult
     * @return \Economic\ProductGroup_GetProductsResponse
     */
    public function setProductGroup_GetProductsResult($ProductGroup_GetProductsResult)
    {
      $this->ProductGroup_GetProductsResult = $ProductGroup_GetProductsResult;
      return $this;
    }

}
