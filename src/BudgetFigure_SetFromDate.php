<?php

namespace Economic;

class BudgetFigure_SetFromDate
{

    /**
     * @var BudgetFigureHandle $budgetFigureHandle
     */
    protected $budgetFigureHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param BudgetFigureHandle $budgetFigureHandle
     * @param \DateTime $value
     */
    public function __construct($budgetFigureHandle, \DateTime $value)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      $this->value = $value->format(\DateTime::ATOM);
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
     * @return \Economic\BudgetFigure_SetFromDate
     */
    public function setBudgetFigureHandle($budgetFigureHandle)
    {
      $this->budgetFigureHandle = $budgetFigureHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Economic\BudgetFigure_SetFromDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
