<?php

namespace Economic;

class Employee_GetDataResponse
{

    /**
     * @var EmployeeData $Employee_GetDataResult
     */
    protected $Employee_GetDataResult = null;

    /**
     * @param EmployeeData $Employee_GetDataResult
     */
    public function __construct($Employee_GetDataResult)
    {
      $this->Employee_GetDataResult = $Employee_GetDataResult;
    }

    /**
     * @return EmployeeData
     */
    public function getEmployee_GetDataResult()
    {
      return $this->Employee_GetDataResult;
    }

    /**
     * @param EmployeeData $Employee_GetDataResult
     * @return \Economic\Employee_GetDataResponse
     */
    public function setEmployee_GetDataResult($Employee_GetDataResult)
    {
      $this->Employee_GetDataResult = $Employee_GetDataResult;
      return $this;
    }

}
