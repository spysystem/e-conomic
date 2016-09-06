<?php

namespace Economic;

class ProductGroup_FindByNumberListResponse
{

    /**
     * @var ArrayOfProductGroupHandle $ProductGroup_FindByNumberListResult
     */
    protected $ProductGroup_FindByNumberListResult = null;

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_FindByNumberListResult
     */
    public function __construct($ProductGroup_FindByNumberListResult)
    {
      $this->ProductGroup_FindByNumberListResult = $ProductGroup_FindByNumberListResult;
    }

    /**
     * @return ArrayOfProductGroupHandle
     */
    public function getProductGroup_FindByNumberListResult()
    {
      return $this->ProductGroup_FindByNumberListResult;
    }

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_FindByNumberListResult
     * @return \Economic\ProductGroup_FindByNumberListResponse
     */
    public function setProductGroup_FindByNumberListResult($ProductGroup_FindByNumberListResult)
    {
      $this->ProductGroup_FindByNumberListResult = $ProductGroup_FindByNumberListResult;
      return $this;
    }

}
