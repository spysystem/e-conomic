<?php

namespace Economic;

class EmployeeGroup_SetName
{

    /**
     * @var EmployeeGroupHandle $employeeGroupHandle
     */
    protected $employeeGroupHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param EmployeeGroupHandle $employeeGroupHandle
     * @param string $value
     */
    public function __construct($employeeGroupHandle, $value)
    {
      $this->employeeGroupHandle = $employeeGroupHandle;
      $this->value = $value;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getEmployeeGroupHandle()
    {
      return $this->employeeGroupHandle;
    }

    /**
     * @param EmployeeGroupHandle $employeeGroupHandle
     * @return \Economic\EmployeeGroup_SetName
     */
    public function setEmployeeGroupHandle($employeeGroupHandle)
    {
      $this->employeeGroupHandle = $employeeGroupHandle;
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
     * @return \Economic\EmployeeGroup_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
