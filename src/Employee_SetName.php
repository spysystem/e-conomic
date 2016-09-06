<?php

namespace Economic;

class Employee_SetName
{

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param EmployeeHandle $employeeHandle
     * @param string $value
     */
    public function __construct($employeeHandle, $value)
    {
      $this->employeeHandle = $employeeHandle;
      $this->value = $value;
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
     * @return \Economic\Employee_SetName
     */
    public function setEmployeeHandle($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Employee_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
