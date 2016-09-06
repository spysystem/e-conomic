<?php

namespace Economic;

class BudgetFigure_UpdateFromDataResponse
{

    /**
     * @var BudgetFigureHandle $BudgetFigure_UpdateFromDataResult
     */
    protected $BudgetFigure_UpdateFromDataResult = null;

    /**
     * @param BudgetFigureHandle $BudgetFigure_UpdateFromDataResult
     */
    public function __construct($BudgetFigure_UpdateFromDataResult)
    {
      $this->BudgetFigure_UpdateFromDataResult = $BudgetFigure_UpdateFromDataResult;
    }

    /**
     * @return BudgetFigureHandle
     */
    public function getBudgetFigure_UpdateFromDataResult()
    {
      return $this->BudgetFigure_UpdateFromDataResult;
    }

    /**
     * @param BudgetFigureHandle $BudgetFigure_UpdateFromDataResult
     * @return \Economic\BudgetFigure_UpdateFromDataResponse
     */
    public function setBudgetFigure_UpdateFromDataResult($BudgetFigure_UpdateFromDataResult)
    {
      $this->BudgetFigure_UpdateFromDataResult = $BudgetFigure_UpdateFromDataResult;
      return $this;
    }

}
