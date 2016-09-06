<?php

namespace Economic;

class BudgetFigure_GetDepartment
{

    /**
     * @var BudgetFigureHandle $budgetFigureHandle
     */
    protected $budgetFigureHandle = null;

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     */
    public function __construct($budgetFigureHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
    }

    /**
     * @return BudgetFigureHandle
     */
    public function getBudgetFigureHandle()
    {
      return $this->budgetFigureHandle;
    }

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     * @return \Economic\BudgetFigure_GetDepartment
     */
    public function setBudgetFigureHandle($budgetFigureHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      return $this;
    }

}
