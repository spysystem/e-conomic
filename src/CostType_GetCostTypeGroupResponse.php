<?php

namespace Economic;

class CostType_GetCostTypeGroupResponse
{

    /**
     * @var CostTypeGroupHandle $CostType_GetCostTypeGroupResult
     */
    protected $CostType_GetCostTypeGroupResult = null;

    /**
     * @param CostTypeGroupHandle $CostType_GetCostTypeGroupResult
     */
    public function __construct($CostType_GetCostTypeGroupResult)
    {
      $this->CostType_GetCostTypeGroupResult = $CostType_GetCostTypeGroupResult;
    }

    /**
     * @return CostTypeGroupHandle
     */
    public function getCostType_GetCostTypeGroupResult()
    {
      return $this->CostType_GetCostTypeGroupResult;
    }

    /**
     * @param CostTypeGroupHandle $CostType_GetCostTypeGroupResult
     * @return \Economic\CostType_GetCostTypeGroupResponse
     */
    public function setCostType_GetCostTypeGroupResult($CostType_GetCostTypeGroupResult)
    {
      $this->CostType_GetCostTypeGroupResult = $CostType_GetCostTypeGroupResult;
      return $this;
    }

}
