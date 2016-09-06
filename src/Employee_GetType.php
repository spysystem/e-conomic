<?php

namespace Economic;

class Employee_GetType
{

    /**
     * @var EmployeeHandle $employee
     */
    protected $employee = null;

    /**
     * @param EmployeeHandle $employee
     */
    public function __construct($employee)
    {
      $this->employee = $employee;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param EmployeeHandle $employee
     * @return \Economic\Employee_GetType
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
      return $this;
    }

}
