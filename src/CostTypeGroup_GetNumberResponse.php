<?php

namespace Economic;

class CostTypeGroup_GetNumberResponse
{

    /**
     * @var int $CostTypeGroup_GetNumberResult
     */
    protected $CostTypeGroup_GetNumberResult = null;

    /**
     * @param int $CostTypeGroup_GetNumberResult
     */
    public function __construct($CostTypeGroup_GetNumberResult)
    {
      $this->CostTypeGroup_GetNumberResult = $CostTypeGroup_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getCostTypeGroup_GetNumberResult()
    {
      return $this->CostTypeGroup_GetNumberResult;
    }

    /**
     * @param int $CostTypeGroup_GetNumberResult
     * @return \Economic\CostTypeGroup_GetNumberResponse
     */
    public function setCostTypeGroup_GetNumberResult($CostTypeGroup_GetNumberResult)
    {
      $this->CostTypeGroup_GetNumberResult = $CostTypeGroup_GetNumberResult;
      return $this;
    }

}
