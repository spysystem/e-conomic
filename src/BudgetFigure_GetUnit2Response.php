<?php

namespace Economic;

class BudgetFigure_GetUnit2Response
{

    /**
     * @var UnitHandle $BudgetFigure_GetUnit2Result
     */
    protected $BudgetFigure_GetUnit2Result = null;

    /**
     * @param UnitHandle $BudgetFigure_GetUnit2Result
     */
    public function __construct($BudgetFigure_GetUnit2Result)
    {
      $this->BudgetFigure_GetUnit2Result = $BudgetFigure_GetUnit2Result;
    }

    /**
     * @return UnitHandle
     */
    public function getBudgetFigure_GetUnit2Result()
    {
      return $this->BudgetFigure_GetUnit2Result;
    }

    /**
     * @param UnitHandle $BudgetFigure_GetUnit2Result
     * @return \Economic\BudgetFigure_GetUnit2Response
     */
    public function setBudgetFigure_GetUnit2Result($BudgetFigure_GetUnit2Result)
    {
      $this->BudgetFigure_GetUnit2Result = $BudgetFigure_GetUnit2Result;
      return $this;
    }

}
