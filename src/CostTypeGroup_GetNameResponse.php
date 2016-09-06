<?php

namespace Economic;

class CostTypeGroup_GetNameResponse
{

    /**
     * @var string $CostTypeGroup_GetNameResult
     */
    protected $CostTypeGroup_GetNameResult = null;

    /**
     * @param string $CostTypeGroup_GetNameResult
     */
    public function __construct($CostTypeGroup_GetNameResult)
    {
      $this->CostTypeGroup_GetNameResult = $CostTypeGroup_GetNameResult;
    }

    /**
     * @return string
     */
    public function getCostTypeGroup_GetNameResult()
    {
      return $this->CostTypeGroup_GetNameResult;
    }

    /**
     * @param string $CostTypeGroup_GetNameResult
     * @return \Economic\CostTypeGroup_GetNameResponse
     */
    public function setCostTypeGroup_GetNameResult($CostTypeGroup_GetNameResult)
    {
      $this->CostTypeGroup_GetNameResult = $CostTypeGroup_GetNameResult;
      return $this;
    }

}
