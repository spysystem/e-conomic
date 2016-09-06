<?php

namespace Economic;

class BudgetFigure_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfBudgetFigureHandle $BudgetFigure_CreateFromDataArrayResult
     */
    protected $BudgetFigure_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_CreateFromDataArrayResult
     */
    public function __construct($BudgetFigure_CreateFromDataArrayResult)
    {
      $this->BudgetFigure_CreateFromDataArrayResult = $BudgetFigure_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfBudgetFigureHandle
     */
    public function getBudgetFigure_CreateFromDataArrayResult()
    {
      return $this->BudgetFigure_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_CreateFromDataArrayResult
     * @return \Economic\BudgetFigure_CreateFromDataArrayResponse
     */
    public function setBudgetFigure_CreateFromDataArrayResult($BudgetFigure_CreateFromDataArrayResult)
    {
      $this->BudgetFigure_CreateFromDataArrayResult = $BudgetFigure_CreateFromDataArrayResult;
      return $this;
    }

}
