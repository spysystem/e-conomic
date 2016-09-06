<?php

namespace Economic;

class Employee_GetSalesPriceBefore
{

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @param EmployeeHandle $employeeHandle
     */
    public function __construct($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployeeHandle()
    {
      return $this->employeeHandle;
    }

    /**
     * @param EmployeeHandle $employeeHandle
     * @return \Economic\Employee_GetSalesPriceBefore
     */
    public function setEmployeeHandle($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
      return $this;
    }

}
