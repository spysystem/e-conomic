<?php

namespace Economic;

class BudgetFigure_FindByDateResponse
{

    /**
     * @var ArrayOfBudgetFigureHandle $BudgetFigure_FindByDateResult
     */
    protected $BudgetFigure_FindByDateResult = null;

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_FindByDateResult
     */
    public function __construct($BudgetFigure_FindByDateResult)
    {
      $this->BudgetFigure_FindByDateResult = $BudgetFigure_FindByDateResult;
    }

    /**
     * @return ArrayOfBudgetFigureHandle
     */
    public function getBudgetFigure_FindByDateResult()
    {
      return $this->BudgetFigure_FindByDateResult;
    }

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_FindByDateResult
     * @return \Economic\BudgetFigure_FindByDateResponse
     */
    public function setBudgetFigure_FindByDateResult($BudgetFigure_FindByDateResult)
    {
      $this->BudgetFigure_FindByDateResult = $BudgetFigure_FindByDateResult;
      return $this;
    }

}
