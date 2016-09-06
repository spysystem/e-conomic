<?php

namespace Economic;

class CostType_GetDataArrayResponse
{

    /**
     * @var ArrayOfCostTypeData $CostType_GetDataArrayResult
     */
    protected $CostType_GetDataArrayResult = null;

    /**
     * @param ArrayOfCostTypeData $CostType_GetDataArrayResult
     */
    public function __construct($CostType_GetDataArrayResult)
    {
      $this->CostType_GetDataArrayResult = $CostType_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCostTypeData
     */
    public function getCostType_GetDataArrayResult()
    {
      return $this->CostType_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCostTypeData $CostType_GetDataArrayResult
     * @return \Economic\CostType_GetDataArrayResponse
     */
    public function setCostType_GetDataArrayResult($CostType_GetDataArrayResult)
    {
      $this->CostType_GetDataArrayResult = $CostType_GetDataArrayResult;
      return $this;
    }

}
