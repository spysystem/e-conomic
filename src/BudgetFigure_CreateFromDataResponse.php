<?php

namespace Economic;

class BudgetFigure_CreateFromDataResponse
{

    /**
     * @var BudgetFigureHandle $BudgetFigure_CreateFromDataResult
     */
    protected $BudgetFigure_CreateFromDataResult = null;

    /**
     * @param BudgetFigureHandle $BudgetFigure_CreateFromDataResult
     */
    public function __construct($BudgetFigure_CreateFromDataResult)
    {
      $this->BudgetFigure_CreateFromDataResult = $BudgetFigure_CreateFromDataResult;
    }

    /**
     * @return BudgetFigureHandle
     */
    public function getBudgetFigure_CreateFromDataResult()
    {
      return $this->BudgetFigure_CreateFromDataResult;
    }

    /**
     * @param BudgetFigureHandle $BudgetFigure_CreateFromDataResult
     * @return \Economic\BudgetFigure_CreateFromDataResponse
     */
    public function setBudgetFigure_CreateFromDataResult($BudgetFigure_CreateFromDataResult)
    {
      $this->BudgetFigure_CreateFromDataResult = $BudgetFigure_CreateFromDataResult;
      return $this;
    }

}
