<?php

namespace Economic;

class BudgetFigure_CreateResponse
{

    /**
     * @var BudgetFigureHandle $BudgetFigure_CreateResult
     */
    protected $BudgetFigure_CreateResult = null;

    /**
     * @param BudgetFigureHandle $BudgetFigure_CreateResult
     */
    public function __construct($BudgetFigure_CreateResult)
    {
      $this->BudgetFigure_CreateResult = $BudgetFigure_CreateResult;
    }

    /**
     * @return BudgetFigureHandle
     */
    public function getBudgetFigure_CreateResult()
    {
      return $this->BudgetFigure_CreateResult;
    }

    /**
     * @param BudgetFigureHandle $BudgetFigure_CreateResult
     * @return \Economic\BudgetFigure_CreateResponse
     */
    public function setBudgetFigure_CreateResult($BudgetFigure_CreateResult)
    {
      $this->BudgetFigure_CreateResult = $BudgetFigure_CreateResult;
      return $this;
    }

}
