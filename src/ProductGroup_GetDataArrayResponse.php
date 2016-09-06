<?php

namespace Economic;

class ProductGroup_GetDataArrayResponse
{

    /**
     * @var ArrayOfProductGroupData $ProductGroup_GetDataArrayResult
     */
    protected $ProductGroup_GetDataArrayResult = null;

    /**
     * @param ArrayOfProductGroupData $ProductGroup_GetDataArrayResult
     */
    public function __construct($ProductGroup_GetDataArrayResult)
    {
      $this->ProductGroup_GetDataArrayResult = $ProductGroup_GetDataArrayResult;
    }

    /**
     * @return ArrayOfProductGroupData
     */
    public function getProductGroup_GetDataArrayResult()
    {
      return $this->ProductGroup_GetDataArrayResult;
    }

    /**
     * @param ArrayOfProductGroupData $ProductGroup_GetDataArrayResult
     * @return \Economic\ProductGroup_GetDataArrayResponse
     */
    public function setProductGroup_GetDataArrayResult($ProductGroup_GetDataArrayResult)
    {
      $this->ProductGroup_GetDataArrayResult = $ProductGroup_GetDataArrayResult;
      return $this;
    }

}
