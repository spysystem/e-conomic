<?php

namespace Economic;

class CostTypeGroup_GetAccountClosedResponse
{

    /**
     * @var AccountHandle $CostTypeGroup_GetAccountClosedResult
     */
    protected $CostTypeGroup_GetAccountClosedResult = null;

    /**
     * @param AccountHandle $CostTypeGroup_GetAccountClosedResult
     */
    public function __construct($CostTypeGroup_GetAccountClosedResult)
    {
      $this->CostTypeGroup_GetAccountClosedResult = $CostTypeGroup_GetAccountClosedResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCostTypeGroup_GetAccountClosedResult()
    {
      return $this->CostTypeGroup_GetAccountClosedResult;
    }

    /**
     * @param AccountHandle $CostTypeGroup_GetAccountClosedResult
     * @return \Economic\CostTypeGroup_GetAccountClosedResponse
     */
    public function setCostTypeGroup_GetAccountClosedResult($CostTypeGroup_GetAccountClosedResult)
    {
      $this->CostTypeGroup_GetAccountClosedResult = $CostTypeGroup_GetAccountClosedResult;
      return $this;
    }

}
