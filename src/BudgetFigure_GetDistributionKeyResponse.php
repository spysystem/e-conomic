<?php

namespace Economic;

class BudgetFigure_GetDistributionKeyResponse
{

    /**
     * @var DistributionKeyHandle $BudgetFigure_GetDistributionKeyResult
     */
    protected $BudgetFigure_GetDistributionKeyResult = null;

    /**
     * @param DistributionKeyHandle $BudgetFigure_GetDistributionKeyResult
     */
    public function __construct($BudgetFigure_GetDistributionKeyResult)
    {
      $this->BudgetFigure_GetDistributionKeyResult = $BudgetFigure_GetDistributionKeyResult;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getBudgetFigure_GetDistributionKeyResult()
    {
      return $this->BudgetFigure_GetDistributionKeyResult;
    }

    /**
     * @param DistributionKeyHandle $BudgetFigure_GetDistributionKeyResult
     * @return \Economic\BudgetFigure_GetDistributionKeyResponse
     */
    public function setBudgetFigure_GetDistributionKeyResult($BudgetFigure_GetDistributionKeyResult)
    {
      $this->BudgetFigure_GetDistributionKeyResult = $BudgetFigure_GetDistributionKeyResult;
      return $this;
    }

}
