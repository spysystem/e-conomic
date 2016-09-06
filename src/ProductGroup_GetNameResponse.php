<?php

namespace Economic;

class ProductGroup_GetNameResponse
{

    /**
     * @var string $ProductGroup_GetNameResult
     */
    protected $ProductGroup_GetNameResult = null;

    /**
     * @param string $ProductGroup_GetNameResult
     */
    public function __construct($ProductGroup_GetNameResult)
    {
      $this->ProductGroup_GetNameResult = $ProductGroup_GetNameResult;
    }

    /**
     * @return string
     */
    public function getProductGroup_GetNameResult()
    {
      return $this->ProductGroup_GetNameResult;
    }

    /**
     * @param string $ProductGroup_GetNameResult
     * @return \Economic\ProductGroup_GetNameResponse
     */
    public function setProductGroup_GetNameResult($ProductGroup_GetNameResult)
    {
      $this->ProductGroup_GetNameResult = $ProductGroup_GetNameResult;
      return $this;
    }

}
