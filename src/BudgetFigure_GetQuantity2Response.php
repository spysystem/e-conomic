<?php

namespace Economic;

class BudgetFigure_GetQuantity2Response
{

    /**
     * @var float $BudgetFigure_GetQuantity2Result
     */
    protected $BudgetFigure_GetQuantity2Result = null;

    /**
     * @param float $BudgetFigure_GetQuantity2Result
     */
    public function __construct($BudgetFigure_GetQuantity2Result)
    {
      $this->BudgetFigure_GetQuantity2Result = $BudgetFigure_GetQuantity2Result;
    }

    /**
     * @return float
     */
    public function getBudgetFigure_GetQuantity2Result()
    {
      return $this->BudgetFigure_GetQuantity2Result;
    }

    /**
     * @param float $BudgetFigure_GetQuantity2Result
     * @return \Economic\BudgetFigure_GetQuantity2Response
     */
    public function setBudgetFigure_GetQuantity2Result($BudgetFigure_GetQuantity2Result)
    {
      $this->BudgetFigure_GetQuantity2Result = $BudgetFigure_GetQuantity2Result;
      return $this;
    }

}
