<?php

namespace Economic;

class Employee_FindByNumberResponse
{

    /**
     * @var EmployeeHandle $Employee_FindByNumberResult
     */
    protected $Employee_FindByNumberResult = null;

    /**
     * @param EmployeeHandle $Employee_FindByNumberResult
     */
    public function __construct($Employee_FindByNumberResult)
    {
      $this->Employee_FindByNumberResult = $Employee_FindByNumberResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployee_FindByNumberResult()
    {
      return $this->Employee_FindByNumberResult;
    }

    /**
     * @param EmployeeHandle $Employee_FindByNumberResult
     * @return \Economic\Employee_FindByNumberResponse
     */
    public function setEmployee_FindByNumberResult($Employee_FindByNumberResult)
    {
      $this->Employee_FindByNumberResult = $Employee_FindByNumberResult;
      return $this;
    }

}
