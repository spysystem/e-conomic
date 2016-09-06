<?php

namespace Economic;

class EmployeeGroup_Delete
{

    /**
     * @var EmployeeGroupHandle $employeeGroupHandle
     */
    protected $employeeGroupHandle = null;

    /**
     * @param EmployeeGroupHandle $employeeGroupHandle
     */
    public function __construct($employeeGroupHandle)
    {
      $this->employeeGroupHandle = $employeeGroupHandle;
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
     * @return \Economic\EmployeeGroup_Delete
     */
    public function setEmployeeGroupHandle($employeeGroupHandle)
    {
      $this->employeeGroupHandle = $employeeGroupHandle;
      return $this;
    }

}
