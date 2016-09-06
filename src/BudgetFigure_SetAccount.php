<?php

namespace Economic;

class BudgetFigure_SetAccount
{

    /**
     * @var BudgetFigureHandle $budgetFigureHandle
     */
    protected $budgetFigureHandle = null;

    /**
     * @var AccountHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     * @param AccountHandle $valueHandle
     */
    public function __construct($budgetFigureHandle, $valueHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\BudgetFigure_SetAccount
     */
    public function setBudgetFigureHandle($budgetFigureHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param AccountHandle $valueHandle
     * @return \Economic\BudgetFigure_SetAccount
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
