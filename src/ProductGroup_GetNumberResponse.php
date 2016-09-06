<?php

namespace Economic;

class ProductGroup_GetNumberResponse
{

    /**
     * @var int $ProductGroup_GetNumberResult
     */
    protected $ProductGroup_GetNumberResult = null;

    /**
     * @param int $ProductGroup_GetNumberResult
     */
    public function __construct($ProductGroup_GetNumberResult)
    {
      $this->ProductGroup_GetNumberResult = $ProductGroup_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getProductGroup_GetNumberResult()
    {
      return $this->ProductGroup_GetNumberResult;
    }

    /**
     * @param int $ProductGroup_GetNumberResult
     * @return \Economic\ProductGroup_GetNumberResponse
     */
    public function setProductGroup_GetNumberResult($ProductGroup_GetNumberResult)
    {
      $this->ProductGroup_GetNumberResult = $ProductGroup_GetNumberResult;
      return $this;
    }

}
