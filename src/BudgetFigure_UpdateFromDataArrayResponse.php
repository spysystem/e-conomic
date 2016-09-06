<?php

namespace Economic;

class BudgetFigure_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfBudgetFigureHandle $BudgetFigure_UpdateFromDataArrayResult
     */
    protected $BudgetFigure_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_UpdateFromDataArrayResult
     */
    public function __construct($BudgetFigure_UpdateFromDataArrayResult)
    {
      $this->BudgetFigure_UpdateFromDataArrayResult = $BudgetFigure_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfBudgetFigureHandle
     */
    public function getBudgetFigure_UpdateFromDataArrayResult()
    {
      return $this->BudgetFigure_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfBudgetFigureHandle $BudgetFigure_UpdateFromDataArrayResult
     * @return \Economic\BudgetFigure_UpdateFromDataArrayResponse
     */
    public function setBudgetFigure_UpdateFromDataArrayResult($BudgetFigure_UpdateFromDataArrayResult)
    {
      $this->BudgetFigure_UpdateFromDataArrayResult = $BudgetFigure_UpdateFromDataArrayResult;
      return $this;
    }

}
