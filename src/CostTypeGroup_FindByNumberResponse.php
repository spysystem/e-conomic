<?php

namespace Economic;

class CostTypeGroup_FindByNumberResponse
{

    /**
     * @var CostTypeGroupHandle $CostTypeGroup_FindByNumberResult
     */
    protected $CostTypeGroup_FindByNumberResult = null;

    /**
     * @param CostTypeGroupHandle $CostTypeGroup_FindByNumberResult
     */
    public function __construct($CostTypeGroup_FindByNumberResult)
    {
      $this->CostTypeGroup_FindByNumberResult = $CostTypeGroup_FindByNumberResult;
    }

    /**
     * @return CostTypeGroupHandle
     */
    public function getCostTypeGroup_FindByNumberResult()
    {
      return $this->CostTypeGroup_FindByNumberResult;
    }

    /**
     * @param CostTypeGroupHandle $CostTypeGroup_FindByNumberResult
     * @return \Economic\CostTypeGroup_FindByNumberResponse
     */
    public function setCostTypeGroup_FindByNumberResult($CostTypeGroup_FindByNumberResult)
    {
      $this->CostTypeGroup_FindByNumberResult = $CostTypeGroup_FindByNumberResult;
      return $this;
    }

}
