<?php

namespace Economic;

class BudgetFigure_GetAmountDefaultCurrencyResponse
{

    /**
     * @var float $BudgetFigure_GetAmountDefaultCurrencyResult
     */
    protected $BudgetFigure_GetAmountDefaultCurrencyResult = null;

    /**
     * @param float $BudgetFigure_GetAmountDefaultCurrencyResult
     */
    public function __construct($BudgetFigure_GetAmountDefaultCurrencyResult)
    {
      $this->BudgetFigure_GetAmountDefaultCurrencyResult = $BudgetFigure_GetAmountDefaultCurrencyResult;
    }

    /**
     * @return float
     */
    public function getBudgetFigure_GetAmountDefaultCurrencyResult()
    {
      return $this->BudgetFigure_GetAmountDefaultCurrencyResult;
    }

    /**
     * @param float $BudgetFigure_GetAmountDefaultCurrencyResult
     * @return \Economic\BudgetFigure_GetAmountDefaultCurrencyResponse
     */
    public function setBudgetFigure_GetAmountDefaultCurrencyResult($BudgetFigure_GetAmountDefaultCurrencyResult)
    {
      $this->BudgetFigure_GetAmountDefaultCurrencyResult = $BudgetFigure_GetAmountDefaultCurrencyResult;
      return $this;
    }

}
