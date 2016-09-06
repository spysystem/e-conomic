<?php

namespace Economic;

class BudgetFigure_GetDataResponse
{

    /**
     * @var BudgetFigureData $BudgetFigure_GetDataResult
     */
    protected $BudgetFigure_GetDataResult = null;

    /**
     * @param BudgetFigureData $BudgetFigure_GetDataResult
     */
    public function __construct($BudgetFigure_GetDataResult)
    {
      $this->BudgetFigure_GetDataResult = $BudgetFigure_GetDataResult;
    }

    /**
     * @return BudgetFigureData
     */
    public function getBudgetFigure_GetDataResult()
    {
      return $this->BudgetFigure_GetDataResult;
    }

    /**
     * @param BudgetFigureData $BudgetFigure_GetDataResult
     * @return \Economic\BudgetFigure_GetDataResponse
     */
    public function setBudgetFigure_GetDataResult($BudgetFigure_GetDataResult)
    {
      $this->BudgetFigure_GetDataResult = $BudgetFigure_GetDataResult;
      return $this;
    }

}
