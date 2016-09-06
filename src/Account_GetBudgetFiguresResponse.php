<?php

namespace Economic;

class Account_GetBudgetFiguresResponse
{

    /**
     * @var ArrayOfBudgetFigureHandle $Account_GetBudgetFiguresResult
     */
    protected $Account_GetBudgetFiguresResult = null;

    /**
     * @param ArrayOfBudgetFigureHandle $Account_GetBudgetFiguresResult
     */
    public function __construct($Account_GetBudgetFiguresResult)
    {
      $this->Account_GetBudgetFiguresResult = $Account_GetBudgetFiguresResult;
    }

    /**
     * @return ArrayOfBudgetFigureHandle
     */
    public function getAccount_GetBudgetFiguresResult()
    {
      return $this->Account_GetBudgetFiguresResult;
    }

    /**
     * @param ArrayOfBudgetFigureHandle $Account_GetBudgetFiguresResult
     * @return \Economic\Account_GetBudgetFiguresResponse
     */
    public function setAccount_GetBudgetFiguresResult($Account_GetBudgetFiguresResult)
    {
      $this->Account_GetBudgetFiguresResult = $Account_GetBudgetFiguresResult;
      return $this;
    }

}
