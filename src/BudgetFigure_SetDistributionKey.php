<?php

namespace Economic;

class BudgetFigure_SetDistributionKey
{

    /**
     * @var BudgetFigureHandle $budgetFigureHandle
     */
    protected $budgetFigureHandle = null;

    /**
     * @var DistributionKeyHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     * @param DistributionKeyHandle $valueHandle
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
     * @return \Economic\BudgetFigure_SetDistributionKey
     */
    public function setBudgetFigureHandle($budgetFigureHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      return $this;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DistributionKeyHandle $valueHandle
     * @return \Economic\BudgetFigure_SetDistributionKey
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
