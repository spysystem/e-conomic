<?php

namespace Economic;

class CostType_FindByNumberListResponse
{

    /**
     * @var ArrayOfCostTypeHandle $CostType_FindByNumberListResult
     */
    protected $CostType_FindByNumberListResult = null;

    /**
     * @param ArrayOfCostTypeHandle $CostType_FindByNumberListResult
     */
    public function __construct($CostType_FindByNumberListResult)
    {
      $this->CostType_FindByNumberListResult = $CostType_FindByNumberListResult;
    }

    /**
     * @return ArrayOfCostTypeHandle
     */
    public function getCostType_FindByNumberListResult()
    {
      return $this->CostType_FindByNumberListResult;
    }

    /**
     * @param ArrayOfCostTypeHandle $CostType_FindByNumberListResult
     * @return \Economic\CostType_FindByNumberListResponse
     */
    public function setCostType_FindByNumberListResult($CostType_FindByNumberListResult)
    {
      $this->CostType_FindByNumberListResult = $CostType_FindByNumberListResult;
      return $this;
    }

}
