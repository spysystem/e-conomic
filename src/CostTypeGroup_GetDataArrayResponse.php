<?php

namespace Economic;

class CostTypeGroup_GetDataArrayResponse
{

    /**
     * @var ArrayOfCostTypeGroupData $CostTypeGroup_GetDataArrayResult
     */
    protected $CostTypeGroup_GetDataArrayResult = null;

    /**
     * @param ArrayOfCostTypeGroupData $CostTypeGroup_GetDataArrayResult
     */
    public function __construct($CostTypeGroup_GetDataArrayResult)
    {
      $this->CostTypeGroup_GetDataArrayResult = $CostTypeGroup_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCostTypeGroupData
     */
    public function getCostTypeGroup_GetDataArrayResult()
    {
      return $this->CostTypeGroup_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCostTypeGroupData $CostTypeGroup_GetDataArrayResult
     * @return \Economic\CostTypeGroup_GetDataArrayResponse
     */
    public function setCostTypeGroup_GetDataArrayResult($CostTypeGroup_GetDataArrayResult)
    {
      $this->CostTypeGroup_GetDataArrayResult = $CostTypeGroup_GetDataArrayResult;
      return $this;
    }

}
