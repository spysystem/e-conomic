<?php

namespace Economic;

class ProductGroup_GetDataResponse
{

    /**
     * @var ProductGroupData $ProductGroup_GetDataResult
     */
    protected $ProductGroup_GetDataResult = null;

    /**
     * @param ProductGroupData $ProductGroup_GetDataResult
     */
    public function __construct($ProductGroup_GetDataResult)
    {
      $this->ProductGroup_GetDataResult = $ProductGroup_GetDataResult;
    }

    /**
     * @return ProductGroupData
     */
    public function getProductGroup_GetDataResult()
    {
      return $this->ProductGroup_GetDataResult;
    }

    /**
     * @param ProductGroupData $ProductGroup_GetDataResult
     * @return \Economic\ProductGroup_GetDataResponse
     */
    public function setProductGroup_GetDataResult($ProductGroup_GetDataResult)
    {
      $this->ProductGroup_GetDataResult = $ProductGroup_GetDataResult;
      return $this;
    }

}
