<?php

namespace Economic;

class BudgetFigure_GetFromDateResponse
{

    /**
     * @var \DateTime $BudgetFigure_GetFromDateResult
     */
    protected $BudgetFigure_GetFromDateResult = null;

    /**
     * @param \DateTime $BudgetFigure_GetFromDateResult
     */
    public function __construct(\DateTime $BudgetFigure_GetFromDateResult)
    {
      $this->BudgetFigure_GetFromDateResult = $BudgetFigure_GetFromDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getBudgetFigure_GetFromDateResult()
    {
      if ($this->BudgetFigure_GetFromDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BudgetFigure_GetFromDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BudgetFigure_GetFromDateResult
     * @return \Economic\BudgetFigure_GetFromDateResponse
     */
    public function setBudgetFigure_GetFromDateResult(\DateTime $BudgetFigure_GetFromDateResult)
    {
      $this->BudgetFigure_GetFromDateResult = $BudgetFigure_GetFromDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
