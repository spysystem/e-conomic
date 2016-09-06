<?php

namespace Economic;

class ProductGroup_GetAccrualResponse
{

    /**
     * @var AccountHandle $ProductGroup_GetAccrualResult
     */
    protected $ProductGroup_GetAccrualResult = null;

    /**
     * @param AccountHandle $ProductGroup_GetAccrualResult
     */
    public function __construct($ProductGroup_GetAccrualResult)
    {
      $this->ProductGroup_GetAccrualResult = $ProductGroup_GetAccrualResult;
    }

    /**
     * @return AccountHandle
     */
    public function getProductGroup_GetAccrualResult()
    {
      return $this->ProductGroup_GetAccrualResult;
    }

    /**
     * @param AccountHandle $ProductGroup_GetAccrualResult
     * @return \Economic\ProductGroup_GetAccrualResponse
     */
    public function setProductGroup_GetAccrualResult($ProductGroup_GetAccrualResult)
    {
      $this->ProductGroup_GetAccrualResult = $ProductGroup_GetAccrualResult;
      return $this;
    }

}
