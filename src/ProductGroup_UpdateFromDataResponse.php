<?php

namespace Economic;

class ProductGroup_UpdateFromDataResponse
{

    /**
     * @var ProductGroupHandle $ProductGroup_UpdateFromDataResult
     */
    protected $ProductGroup_UpdateFromDataResult = null;

    /**
     * @param ProductGroupHandle $ProductGroup_UpdateFromDataResult
     */
    public function __construct($ProductGroup_UpdateFromDataResult)
    {
      $this->ProductGroup_UpdateFromDataResult = $ProductGroup_UpdateFromDataResult;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroup_UpdateFromDataResult()
    {
      return $this->ProductGroup_UpdateFromDataResult;
    }

    /**
     * @param ProductGroupHandle $ProductGroup_UpdateFromDataResult
     * @return \Economic\ProductGroup_UpdateFromDataResponse
     */
    public function setProductGroup_UpdateFromDataResult($ProductGroup_UpdateFromDataResult)
    {
      $this->ProductGroup_UpdateFromDataResult = $ProductGroup_UpdateFromDataResult;
      return $this;
    }

}
