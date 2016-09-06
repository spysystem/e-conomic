<?php

namespace Economic;

class Employee_SetGroup
{

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var EmployeeGroupHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param EmployeeHandle $employeeHandle
     * @param EmployeeGroupHandle $valueHandle
     */
    public function __construct($employeeHandle, $valueHandle)
    {
      $this->employeeHandle = $employeeHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Employee_SetGroup
     */
    public function setEmployeeHandle($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
      return $this;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param EmployeeGroupHandle $valueHandle
     * @return \Economic\Employee_SetGroup
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
