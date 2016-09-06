<?php

namespace Economic;

class BudgetFigure_SetAmountDefaultCurrency
{

    /**
     * @var BudgetFigureHandle $budgetFigureHandle
     */
    protected $budgetFigureHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     * @param float $value
     */
    public function __construct($budgetFigureHandle, $value)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      $this->value = $value;
    }

    /**
     * @return BudgetFigureHandle
     */
    public function getBudgetFigureHandle()
    {
      return $this->budgetFigureHandle;
    }

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     * @return \Economic\BudgetFigure_SetAmountDefaultCurrency
     */
    public function setBudgetFigureHandle($budgetFigureHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\BudgetFigure_SetAmountDefaultCurrency
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
