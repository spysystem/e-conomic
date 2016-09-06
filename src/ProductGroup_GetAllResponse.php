<?php

namespace Economic;

class ProductGroup_GetAllResponse
{

    /**
     * @var ArrayOfProductGroupHandle $ProductGroup_GetAllResult
     */
    protected $ProductGroup_GetAllResult = null;

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_GetAllResult
     */
    public function __construct($ProductGroup_GetAllResult)
    {
      $this->ProductGroup_GetAllResult = $ProductGroup_GetAllResult;
    }

    /**
     * @return ArrayOfProductGroupHandle
     */
    public function getProductGroup_GetAllResult()
    {
      return $this->ProductGroup_GetAllResult;
    }

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_GetAllResult
     * @return \Economic\ProductGroup_GetAllResponse
     */
    public function setProductGroup_GetAllResult($ProductGroup_GetAllResult)
    {
      $this->ProductGroup_GetAllResult = $ProductGroup_GetAllResult;
      return $this;
    }

}
