<?php

namespace Economic;

class Department_SetName
{

    /**
     * @var DepartmentHandle $departmentHandle
     */
    protected $departmentHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param DepartmentHandle $departmentHandle
     * @param string $value
     */
    public function __construct($departmentHandle, $value)
    {
      $this->departmentHandle = $departmentHandle;
      $this->value = $value;
    }

    /**
     * @return DepartmentHandle
     */
    public function getDepartmentHandle()
    {
      return $this->departmentHandle;
    }

    /**
     * @param DepartmentHandle $departmentHandle
     * @return \Economic\Department_SetName
     */
    public function setDepartmentHandle($departmentHandle)
    {
      $this->departmentHandle = $departmentHandle;
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
     * @return \Economic\Department_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
