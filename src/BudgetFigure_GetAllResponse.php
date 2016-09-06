<?php

namespace Economic;

class BudgetFigure_GetAllResponse
{

    /**
     * @var ArrayOfBudgetFigureHandle $BudgetFigure_GetAllResult
     */
    protected $BudgetFigure_GetAllResult = null;

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_GetAllResult
     */
    public function __construct($BudgetFigure_GetAllResult)
    {
      $this->BudgetFigure_GetAllResult = $BudgetFigure_GetAllResult;
    }

    /**
     * @return ArrayOfBudgetFigureHandle
     */
    public function getBudgetFigure_GetAllResult()
    {
      return $this->BudgetFigure_GetAllResult;
    }

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_GetAllResult
     * @return \Economic\BudgetFigure_GetAllResponse
     */
    public function setBudgetFigure_GetAllResult($BudgetFigure_GetAllResult)
    {
      $this->BudgetFigure_GetAllResult = $BudgetFigure_GetAllResult;
      return $this;
    }

}
