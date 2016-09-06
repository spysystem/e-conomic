<?php

namespace Economic;

class ProductGroup_FindByNameResponse
{

    /**
     * @var ArrayOfProductGroupHandle $ProductGroup_FindByNameResult
     */
    protected $ProductGroup_FindByNameResult = null;

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_FindByNameResult
     */
    public function __construct($ProductGroup_FindByNameResult)
    {
      $this->ProductGroup_FindByNameResult = $ProductGroup_FindByNameResult;
    }

    /**
     * @return ArrayOfProductGroupHandle
     */
    public function getProductGroup_FindByNameResult()
    {
      return $this->ProductGroup_FindByNameResult;
    }

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_FindByNameResult
     * @return \Economic\ProductGroup_FindByNameResponse
     */
    public function setProductGroup_FindByNameResult($ProductGroup_FindByNameResult)
    {
      $this->ProductGroup_FindByNameResult = $ProductGroup_FindByNameResult;
      return $this;
    }

}
