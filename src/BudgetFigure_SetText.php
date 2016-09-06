<?php

namespace Economic;

class BudgetFigure_SetText
{

    /**
     * @var BudgetFigureHandle $budgetFigureHandle
     */
    protected $budgetFigureHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     * @param string $value
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
     * @return \Economic\BudgetFigure_SetText
     */
    public function setBudgetFigureHandle($budgetFigureHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\BudgetFigure_SetText
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
