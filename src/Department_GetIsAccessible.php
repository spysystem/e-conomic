<?php

namespace Economic;

class Department_GetIsAccessible
{

    /**
     * @var DepartmentHandle $departmentHandle
     */
    protected $departmentHandle = null;

    /**
     * @param DepartmentHandle $departmentHandle
     */
    public function __construct($departmentHandle)
    {
      $this->departmentHandle = $departmentHandle;
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
     * @return \Economic\Department_GetIsAccessible
     */
    public function setDepartmentHandle($departmentHandle)
    {
      $this->departmentHandle = $departmentHandle;
      return $this;
    }

}
