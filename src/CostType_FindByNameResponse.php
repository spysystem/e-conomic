<?php

namespace Economic;

class CostType_FindByNameResponse
{

    /**
     * @var ArrayOfCostTypeHandle $CostType_FindByNameResult
     */
    protected $CostType_FindByNameResult = null;

    /**
     * @param ArrayOfCostTypeHandle $CostType_FindByNameResult
     */
    public function __construct($CostType_FindByNameResult)
    {
      $this->CostType_FindByNameResult = $CostType_FindByNameResult;
    }

    /**
     * @return ArrayOfCostTypeHandle
     */
    public function getCostType_FindByNameResult()
    {
      return $this->CostType_FindByNameResult;
    }

    /**
     * @param ArrayOfCostTypeHandle $CostType_FindByNameResult
     * @return \Economic\CostType_FindByNameResponse
     */
    public function setCostType_FindByNameResult($CostType_FindByNameResult)
    {
      $this->CostType_FindByNameResult = $CostType_FindByNameResult;
      return $this;
    }

}
