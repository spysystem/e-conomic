<?php

namespace Economic;

class EmployeeGroup_GetEmployeesResponse
{

    /**
     * @var ArrayOfEmployeeHandle $EmployeeGroup_GetEmployeesResult
     */
    protected $EmployeeGroup_GetEmployeesResult = null;

    /**
     * @param ArrayOfEmployeeHandle $EmployeeGroup_GetEmployeesResult
     */
    public function __construct($EmployeeGroup_GetEmployeesResult)
    {
      $this->EmployeeGroup_GetEmployeesResult = $EmployeeGroup_GetEmployeesResult;
    }

    /**
     * @return ArrayOfEmployeeHandle
     */
    public function getEmployeeGroup_GetEmployeesResult()
    {
      return $this->EmployeeGroup_GetEmployeesResult;
    }

    /**
     * @param ArrayOfEmployeeHandle $EmployeeGroup_GetEmployeesResult
     * @return \Economic\EmployeeGroup_GetEmployeesResponse
     */
    public function setEmployeeGroup_GetEmployeesResult($EmployeeGroup_GetEmployeesResult)
    {
      $this->EmployeeGroup_GetEmployeesResult = $EmployeeGroup_GetEmployeesResult;
      return $this;
    }

}
