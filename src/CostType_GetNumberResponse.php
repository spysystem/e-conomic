<?php

namespace Economic;

class CostType_GetNumberResponse
{

    /**
     * @var string $CostType_GetNumberResult
     */
    protected $CostType_GetNumberResult = null;

    /**
     * @param string $CostType_GetNumberResult
     */
    public function __construct($CostType_GetNumberResult)
    {
      $this->CostType_GetNumberResult = $CostType_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getCostType_GetNumberResult()
    {
      return $this->CostType_GetNumberResult;
    }

    /**
     * @param string $CostType_GetNumberResult
     * @return \Economic\CostType_GetNumberResponse
     */
    public function setCostType_GetNumberResult($CostType_GetNumberResult)
    {
      $this->CostType_GetNumberResult = $CostType_GetNumberResult;
      return $this;
    }

}
