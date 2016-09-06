<?php

namespace Economic;

class BudgetFigure_GetQuantity1Response
{

    /**
     * @var float $BudgetFigure_GetQuantity1Result
     */
    protected $BudgetFigure_GetQuantity1Result = null;

    /**
     * @param float $BudgetFigure_GetQuantity1Result
     */
    public function __construct($BudgetFigure_GetQuantity1Result)
    {
      $this->BudgetFigure_GetQuantity1Result = $BudgetFigure_GetQuantity1Result;
    }

    /**
     * @return float
     */
    public function getBudgetFigure_GetQuantity1Result()
    {
      return $this->BudgetFigure_GetQuantity1Result;
    }

    /**
     * @param float $BudgetFigure_GetQuantity1Result
     * @return \Economic\BudgetFigure_GetQuantity1Response
     */
    public function setBudgetFigure_GetQuantity1Result($BudgetFigure_GetQuantity1Result)
    {
      $this->BudgetFigure_GetQuantity1Result = $BudgetFigure_GetQuantity1Result;
      return $this;
    }

}
