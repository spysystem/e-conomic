<?php

namespace Economic;

class CostType_GetDataResponse
{

    /**
     * @var CostTypeData $CostType_GetDataResult
     */
    protected $CostType_GetDataResult = null;

    /**
     * @param CostTypeData $CostType_GetDataResult
     */
    public function __construct($CostType_GetDataResult)
    {
      $this->CostType_GetDataResult = $CostType_GetDataResult;
    }

    /**
     * @return CostTypeData
     */
    public function getCostType_GetDataResult()
    {
      return $this->CostType_GetDataResult;
    }

    /**
     * @param CostTypeData $CostType_GetDataResult
     * @return \Economic\CostType_GetDataResponse
     */
    public function setCostType_GetDataResult($CostType_GetDataResult)
    {
      $this->CostType_GetDataResult = $CostType_GetDataResult;
      return $this;
    }

}
