<?php

namespace Economic;

class ProductGroup_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfProductGroupHandle $ProductGroup_CreateFromDataArrayResult
     */
    protected $ProductGroup_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_CreateFromDataArrayResult
     */
    public function __construct($ProductGroup_CreateFromDataArrayResult)
    {
      $this->ProductGroup_CreateFromDataArrayResult = $ProductGroup_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProductGroupHandle
     */
    public function getProductGroup_CreateFromDataArrayResult()
    {
      return $this->ProductGroup_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_CreateFromDataArrayResult
     * @return \Economic\ProductGroup_CreateFromDataArrayResponse
     */
    public function setProductGroup_CreateFromDataArrayResult($ProductGroup_CreateFromDataArrayResult)
    {
      $this->ProductGroup_CreateFromDataArrayResult = $ProductGroup_CreateFromDataArrayResult;
      return $this;
    }

}
