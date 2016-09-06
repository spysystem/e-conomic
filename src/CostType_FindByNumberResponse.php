<?php

namespace Economic;

class CostType_FindByNumberResponse
{

    /**
     * @var CostTypeHandle $CostType_FindByNumberResult
     */
    protected $CostType_FindByNumberResult = null;

    /**
     * @param CostTypeHandle $CostType_FindByNumberResult
     */
    public function __construct($CostType_FindByNumberResult)
    {
      $this->CostType_FindByNumberResult = $CostType_FindByNumberResult;
    }

    /**
     * @return CostTypeHandle
     */
    public function getCostType_FindByNumberResult()
    {
      return $this->CostType_FindByNumberResult;
    }

    /**
     * @param CostTypeHandle $CostType_FindByNumberResult
     * @return \Economic\CostType_FindByNumberResponse
     */
    public function setCostType_FindByNumberResult($CostType_FindByNumberResult)
    {
      $this->CostType_FindByNumberResult = $CostType_FindByNumberResult;
      return $this;
    }

}
