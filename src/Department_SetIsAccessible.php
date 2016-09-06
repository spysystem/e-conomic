<?php

namespace Economic;

class Department_SetIsAccessible
{

    /**
     * @var DepartmentHandle $departmentHandle
     */
    protected $departmentHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param DepartmentHandle $departmentHandle
     * @param boolean $value
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
     * @return \Economic\Department_SetIsAccessible
     */
    public function setDepartmentHandle($departmentHandle)
    {
      $this->departmentHandle = $departmentHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\Department_SetIsAccessible
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
