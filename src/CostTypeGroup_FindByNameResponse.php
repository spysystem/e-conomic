<?php

namespace Economic;

class CostTypeGroup_FindByNameResponse
{

    /**
     * @var ArrayOfCostTypeGroupHandle $CostTypeGroup_FindByNameResult
     */
    protected $CostTypeGroup_FindByNameResult = null;

    /**
     * @param ArrayOfCostTypeGroupHandle $CostTypeGroup_FindByNameResult
     */
    public function __construct($CostTypeGroup_FindByNameResult)
    {
      $this->CostTypeGroup_FindByNameResult = $CostTypeGroup_FindByNameResult;
    }

    /**
     * @return ArrayOfCostTypeGroupHandle
     */
    public function getCostTypeGroup_FindByNameResult()
    {
      return $this->CostTypeGroup_FindByNameResult;
    }

    /**
     * @param ArrayOfCostTypeGroupHandle $CostTypeGroup_FindByNameResult
     * @return \Economic\CostTypeGroup_FindByNameResponse
     */
    public function setCostTypeGroup_FindByNameResult($CostTypeGroup_FindByNameResult)
    {
      $this->CostTypeGroup_FindByNameResult = $CostTypeGroup_FindByNameResult;
      return $this;
    }

}
