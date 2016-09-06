<?php

namespace Economic;

class ProductGroup_FindByNumberResponse
{

    /**
     * @var ProductGroupHandle $ProductGroup_FindByNumberResult
     */
    protected $ProductGroup_FindByNumberResult = null;

    /**
     * @param ProductGroupHandle $ProductGroup_FindByNumberResult
     */
    public function __construct($ProductGroup_FindByNumberResult)
    {
      $this->ProductGroup_FindByNumberResult = $ProductGroup_FindByNumberResult;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroup_FindByNumberResult()
    {
      return $this->ProductGroup_FindByNumberResult;
    }

    /**
     * @param ProductGroupHandle $ProductGroup_FindByNumberResult
     * @return \Economic\ProductGroup_FindByNumberResponse
     */
    public function setProductGroup_FindByNumberResult($ProductGroup_FindByNumberResult)
    {
      $this->ProductGroup_FindByNumberResult = $ProductGroup_FindByNumberResult;
      return $this;
    }

}
