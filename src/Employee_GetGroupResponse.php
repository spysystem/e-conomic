<?php

namespace Economic;

class Employee_GetGroupResponse
{

    /**
     * @var EmployeeGroupHandle $Employee_GetGroupResult
     */
    protected $Employee_GetGroupResult = null;

    /**
     * @param EmployeeGroupHandle $Employee_GetGroupResult
     */
    public function __construct($Employee_GetGroupResult)
    {
      $this->Employee_GetGroupResult = $Employee_GetGroupResult;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getEmployee_GetGroupResult()
    {
      return $this->Employee_GetGroupResult;
    }

    /**
     * @param EmployeeGroupHandle $Employee_GetGroupResult
     * @return \Economic\Employee_GetGroupResponse
     */
    public function setEmployee_GetGroupResult($Employee_GetGroupResult)
    {
      $this->Employee_GetGroupResult = $Employee_GetGroupResult;
      return $this;
    }

}
