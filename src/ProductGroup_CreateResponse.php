<?php

namespace Economic;

class ProductGroup_CreateResponse
{

    /**
     * @var ProductGroupHandle $ProductGroup_CreateResult
     */
    protected $ProductGroup_CreateResult = null;

    /**
     * @param ProductGroupHandle $ProductGroup_CreateResult
     */
    public function __construct($ProductGroup_CreateResult)
    {
      $this->ProductGroup_CreateResult = $ProductGroup_CreateResult;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroup_CreateResult()
    {
      return $this->ProductGroup_CreateResult;
    }

    /**
     * @param ProductGroupHandle $ProductGroup_CreateResult
     * @return \Economic\ProductGroup_CreateResponse
     */
    public function setProductGroup_CreateResult($ProductGroup_CreateResult)
    {
      $this->ProductGroup_CreateResult = $ProductGroup_CreateResult;
      return $this;
    }

}
