<?php

namespace Economic;

class Employee_SetSalesPriceBefore
{

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param EmployeeHandle $employeeHandle
     * @param float $value
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
     * @return \Economic\Employee_SetSalesPriceBefore
     */
    public function setEmployeeHandle($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\Employee_SetSalesPriceBefore
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
