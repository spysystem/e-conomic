<?php

namespace Economic;

class Employee_GetTypeResponse
{

    /**
     * @var EmployeeType $Employee_GetTypeResult
     */
    protected $Employee_GetTypeResult = null;

    /**
     * @param EmployeeType $Employee_GetTypeResult
     */
    public function __construct($Employee_GetTypeResult)
    {
      $this->Employee_GetTypeResult = $Employee_GetTypeResult;
    }

    /**
     * @return EmployeeType
     */
    public function getEmployee_GetTypeResult()
    {
      return $this->Employee_GetTypeResult;
    }

    /**
     * @param EmployeeType $Employee_GetTypeResult
     * @return \Economic\Employee_GetTypeResponse
     */
    public function setEmployee_GetTypeResult($Employee_GetTypeResult)
    {
      $this->Employee_GetTypeResult = $Employee_GetTypeResult;
      return $this;
    }

}
