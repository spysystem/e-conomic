<?php

namespace Economic;

class ProductGroup_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfProductGroupHandle $ProductGroup_UpdateFromDataArrayResult
     */
    protected $ProductGroup_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_UpdateFromDataArrayResult
     */
    public function __construct($ProductGroup_UpdateFromDataArrayResult)
    {
      $this->ProductGroup_UpdateFromDataArrayResult = $ProductGroup_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProductGroupHandle
     */
    public function getProductGroup_UpdateFromDataArrayResult()
    {
      return $this->ProductGroup_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProductGroupHandle $ProductGroup_UpdateFromDataArrayResult
     * @return \Economic\ProductGroup_UpdateFromDataArrayResponse
     */
    public function setProductGroup_UpdateFromDataArrayResult($ProductGroup_UpdateFromDataArrayResult)
    {
      $this->ProductGroup_UpdateFromDataArrayResult = $ProductGroup_UpdateFromDataArrayResult;
      return $this;
    }

}
