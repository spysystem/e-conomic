<?php

namespace Economic;

class BudgetFigure_GetAccountResponse
{

    /**
     * @var AccountHandle $BudgetFigure_GetAccountResult
     */
    protected $BudgetFigure_GetAccountResult = null;

    /**
     * @param AccountHandle $BudgetFigure_GetAccountResult
     */
    public function __construct($BudgetFigure_GetAccountResult)
    {
      $this->BudgetFigure_GetAccountResult = $BudgetFigure_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getBudgetFigure_GetAccountResult()
    {
      return $this->BudgetFigure_GetAccountResult;
    }

    /**
     * @param AccountHandle $BudgetFigure_GetAccountResult
     * @return \Economic\BudgetFigure_GetAccountResponse
     */
    public function setBudgetFigure_GetAccountResult($BudgetFigure_GetAccountResult)
    {
      $this->BudgetFigure_GetAccountResult = $BudgetFigure_GetAccountResult;
      return $this;
    }

}
