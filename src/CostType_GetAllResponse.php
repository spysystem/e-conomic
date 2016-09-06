<?php

namespace Economic;

class CostType_GetAllResponse
{

    /**
     * @var ArrayOfCostTypeHandle $CostType_GetAllResult
     */
    protected $CostType_GetAllResult = null;

    /**
     * @param ArrayOfCostTypeHandle $CostType_GetAllResult
     */
    public function __construct($CostType_GetAllResult)
    {
      $this->CostType_GetAllResult = $CostType_GetAllResult;
    }

    /**
     * @return ArrayOfCostTypeHandle
     */
    public function getCostType_GetAllResult()
    {
      return $this->CostType_GetAllResult;
    }

    /**
     * @param ArrayOfCostTypeHandle $CostType_GetAllResult
     * @return \Economic\CostType_GetAllResponse
     */
    public function setCostType_GetAllResult($CostType_GetAllResult)
    {
      $this->CostType_GetAllResult = $CostType_GetAllResult;
      return $this;
    }

}
