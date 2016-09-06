<?php

namespace Economic;

class CostTypeGroup_GetDataResponse
{

    /**
     * @var CostTypeGroupData $CostTypeGroup_GetDataResult
     */
    protected $CostTypeGroup_GetDataResult = null;

    /**
     * @param CostTypeGroupData $CostTypeGroup_GetDataResult
     */
    public function __construct($CostTypeGroup_GetDataResult)
    {
      $this->CostTypeGroup_GetDataResult = $CostTypeGroup_GetDataResult;
    }

    /**
     * @return CostTypeGroupData
     */
    public function getCostTypeGroup_GetDataResult()
    {
      return $this->CostTypeGroup_GetDataResult;
    }

    /**
     * @param CostTypeGroupData $CostTypeGroup_GetDataResult
     * @return \Economic\CostTypeGroup_GetDataResponse
     */
    public function setCostTypeGroup_GetDataResult($CostTypeGroup_GetDataResult)
    {
      $this->CostTypeGroup_GetDataResult = $CostTypeGroup_GetDataResult;
      return $this;
    }

}
