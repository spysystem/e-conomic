<?php

namespace Economic;

class CostTypeGroup_GetAllResponse
{

    /**
     * @var ArrayOfCostTypeGroupHandle $CostTypeGroup_GetAllResult
     */
    protected $CostTypeGroup_GetAllResult = null;

    /**
     * @param ArrayOfCostTypeGroupHandle $CostTypeGroup_GetAllResult
     */
    public function __construct($CostTypeGroup_GetAllResult)
    {
      $this->CostTypeGroup_GetAllResult = $CostTypeGroup_GetAllResult;
    }

    /**
     * @return ArrayOfCostTypeGroupHandle
     */
    public function getCostTypeGroup_GetAllResult()
    {
      return $this->CostTypeGroup_GetAllResult;
    }

    /**
     * @param ArrayOfCostTypeGroupHandle $CostTypeGroup_GetAllResult
     * @return \Economic\CostTypeGroup_GetAllResponse
     */
    public function setCostTypeGroup_GetAllResult($CostTypeGroup_GetAllResult)
    {
      $this->CostTypeGroup_GetAllResult = $CostTypeGroup_GetAllResult;
      return $this;
    }

}
