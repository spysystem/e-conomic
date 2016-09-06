<?php

namespace Economic;

class BudgetFigure_GetTextResponse
{

    /**
     * @var string $BudgetFigure_GetTextResult
     */
    protected $BudgetFigure_GetTextResult = null;

    /**
     * @param string $BudgetFigure_GetTextResult
     */
    public function __construct($BudgetFigure_GetTextResult)
    {
      $this->BudgetFigure_GetTextResult = $BudgetFigure_GetTextResult;
    }

    /**
     * @return string
     */
    public function getBudgetFigure_GetTextResult()
    {
      return $this->BudgetFigure_GetTextResult;
    }

    /**
     * @param string $BudgetFigure_GetTextResult
     * @return \Economic\BudgetFigure_GetTextResponse
     */
    public function setBudgetFigure_GetTextResult($BudgetFigure_GetTextResult)
    {
      $this->BudgetFigure_GetTextResult = $BudgetFigure_GetTextResult;
      return $this;
    }

}
