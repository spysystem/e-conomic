<?php

namespace Economic;

class Account_GetBudgetFiguresByDateResponse
{

    /**
     * @var ArrayOfBudgetFigureHandle $Account_GetBudgetFiguresByDateResult
     */
    protected $Account_GetBudgetFiguresByDateResult = null;

    /**
     * @param ArrayOfBudgetFigureHandle $Account_GetBudgetFiguresByDateResult
     */
    public function __construct($Account_GetBudgetFiguresByDateResult)
    {
      $this->Account_GetBudgetFiguresByDateResult = $Account_GetBudgetFiguresByDateResult;
    }

    /**
     * @return ArrayOfBudgetFigureHandle
     */
    public function getAccount_GetBudgetFiguresByDateResult()
    {
      return $this->Account_GetBudgetFiguresByDateResult;
    }

    /**
     * @param ArrayOfBudgetFigureHandle $Account_GetBudgetFiguresByDateResult
     * @return \Economic\Account_GetBudgetFiguresByDateResponse
     */
    public function setAccount_GetBudgetFiguresByDateResult($Account_GetBudgetFiguresByDateResult)
    {
      $this->Account_GetBudgetFiguresByDateResult = $Account_GetBudgetFiguresByDateResult;
      return $this;
    }

}
