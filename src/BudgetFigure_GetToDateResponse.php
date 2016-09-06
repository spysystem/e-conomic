<?php

namespace Economic;

class BudgetFigure_GetToDateResponse
{

    /**
     * @var \DateTime $BudgetFigure_GetToDateResult
     */
    protected $BudgetFigure_GetToDateResult = null;

    /**
     * @param \DateTime $BudgetFigure_GetToDateResult
     */
    public function __construct(\DateTime $BudgetFigure_GetToDateResult)
    {
      $this->BudgetFigure_GetToDateResult = $BudgetFigure_GetToDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getBudgetFigure_GetToDateResult()
    {
      if ($this->BudgetFigure_GetToDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BudgetFigure_GetToDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BudgetFigure_GetToDateResult
     * @return \Economic\BudgetFigure_GetToDateResponse
     */
    public function setBudgetFigure_GetToDateResult(\DateTime $BudgetFigure_GetToDateResult)
    {
      $this->BudgetFigure_GetToDateResult = $BudgetFigure_GetToDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
