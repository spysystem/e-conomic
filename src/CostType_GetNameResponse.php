<?php

namespace Economic;

class CostType_GetNameResponse
{

    /**
     * @var string $CostType_GetNameResult
     */
    protected $CostType_GetNameResult = null;

    /**
     * @param string $CostType_GetNameResult
     */
    public function __construct($CostType_GetNameResult)
    {
      $this->CostType_GetNameResult = $CostType_GetNameResult;
    }

    /**
     * @return string
     */
    public function getCostType_GetNameResult()
    {
      return $this->CostType_GetNameResult;
    }

    /**
     * @param string $CostType_GetNameResult
     * @return \Economic\CostType_GetNameResponse
     */
    public function setCostType_GetNameResult($CostType_GetNameResult)
    {
      $this->CostType_GetNameResult = $CostType_GetNameResult;
      return $this;
    }

}
