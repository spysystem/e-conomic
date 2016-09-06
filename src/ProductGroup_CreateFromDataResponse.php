<?php

namespace Economic;

class ProductGroup_CreateFromDataResponse
{

    /**
     * @var ProductGroupHandle $ProductGroup_CreateFromDataResult
     */
    protected $ProductGroup_CreateFromDataResult = null;

    /**
     * @param ProductGroupHandle $ProductGroup_CreateFromDataResult
     */
    public function __construct($ProductGroup_CreateFromDataResult)
    {
      $this->ProductGroup_CreateFromDataResult = $ProductGroup_CreateFromDataResult;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroup_CreateFromDataResult()
    {
      return $this->ProductGroup_CreateFromDataResult;
    }

    /**
     * @param ProductGroupHandle $ProductGroup_CreateFromDataResult
     * @return \Economic\ProductGroup_CreateFromDataResponse
     */
    public function setProductGroup_CreateFromDataResult($ProductGroup_CreateFromDataResult)
    {
      $this->ProductGroup_CreateFromDataResult = $ProductGroup_CreateFromDataResult;
      return $this;
    }

}
