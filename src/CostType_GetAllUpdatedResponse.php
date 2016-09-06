<?php

namespace Economic;

class CostType_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfCostTypeHandle $CostType_GetAllUpdatedResult
     */
    protected $CostType_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfCostTypeHandle $CostType_GetAllUpdatedResult
     */
    public function __construct($CostType_GetAllUpdatedResult)
    {
      $this->CostType_GetAllUpdatedResult = $CostType_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfCostTypeHandle
     */
    public function getCostType_GetAllUpdatedResult()
    {
      return $this->CostType_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfCostTypeHandle $CostType_GetAllUpdatedResult
     * @return \Economic\CostType_GetAllUpdatedResponse
     */
    public function setCostType_GetAllUpdatedResult($CostType_GetAllUpdatedResult)
    {
      $this->CostType_GetAllUpdatedResult = $CostType_GetAllUpdatedResult;
      return $this;
    }

}
