<?php

namespace Economic;

class BudgetFigure_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $BudgetFigure_GetDepartmentResult
     */
    protected $BudgetFigure_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $BudgetFigure_GetDepartmentResult
     */
    public function __construct($BudgetFigure_GetDepartmentResult)
    {
      $this->BudgetFigure_GetDepartmentResult = $BudgetFigure_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getBudgetFigure_GetDepartmentResult()
    {
      return $this->BudgetFigure_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $BudgetFigure_GetDepartmentResult
     * @return \Economic\BudgetFigure_GetDepartmentResponse
     */
    public function setBudgetFigure_GetDepartmentResult($BudgetFigure_GetDepartmentResult)
    {
      $this->BudgetFigure_GetDepartmentResult = $BudgetFigure_GetDepartmentResult;
      return $this;
    }

}
