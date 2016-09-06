<?php

namespace Economic;

class BudgetFigure_GetUnit1Response
{

    /**
     * @var UnitHandle $BudgetFigure_GetUnit1Result
     */
    protected $BudgetFigure_GetUnit1Result = null;

    /**
     * @param UnitHandle $BudgetFigure_GetUnit1Result
     */
    public function __construct($BudgetFigure_GetUnit1Result)
    {
      $this->BudgetFigure_GetUnit1Result = $BudgetFigure_GetUnit1Result;
    }

    /**
     * @return UnitHandle
     */
    public function getBudgetFigure_GetUnit1Result()
    {
      return $this->BudgetFigure_GetUnit1Result;
    }

    /**
     * @param UnitHandle $BudgetFigure_GetUnit1Result
     * @return \Economic\BudgetFigure_GetUnit1Response
     */
    public function setBudgetFigure_GetUnit1Result($BudgetFigure_GetUnit1Result)
    {
      $this->BudgetFigure_GetUnit1Result = $BudgetFigure_GetUnit1Result;
      return $this;
    }

}
