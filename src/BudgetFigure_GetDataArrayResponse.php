<?php

namespace Economic;

class BudgetFigure_GetDataArrayResponse
{

    /**
     * @var ArrayOfBudgetFigureData $BudgetFigure_GetDataArrayResult
     */
    protected $BudgetFigure_GetDataArrayResult = null;

    /**
     * @param ArrayOfBudgetFigureData $BudgetFigure_GetDataArrayResult
     */
    public function __construct($BudgetFigure_GetDataArrayResult)
    {
      $this->BudgetFigure_GetDataArrayResult = $BudgetFigure_GetDataArrayResult;
    }

    /**
     * @return ArrayOfBudgetFigureData
     */
    public function getBudgetFigure_GetDataArrayResult()
    {
      return $this->BudgetFigure_GetDataArrayResult;
    }

    /**
     * @param ArrayOfBudgetFigureData $BudgetFigure_GetDataArrayResult
     * @return \Economic\BudgetFigure_GetDataArrayResponse
     */
    public function setBudgetFigure_GetDataArrayResult($BudgetFigure_GetDataArrayResult)
    {
      $this->BudgetFigure_GetDataArrayResult = $BudgetFigure_GetDataArrayResult;
      return $this;
    }

}
