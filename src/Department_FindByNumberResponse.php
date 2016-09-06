<?php

namespace Economic;

class Department_FindByNumberResponse
{

    /**
     * @var DepartmentHandle $Department_FindByNumberResult
     */
    protected $Department_FindByNumberResult = null;

    /**
     * @param DepartmentHandle $Department_FindByNumberResult
     */
    public function __construct($Department_FindByNumberResult)
    {
      $this->Department_FindByNumberResult = $Department_FindByNumberResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getDepartment_FindByNumberResult()
    {
      return $this->Department_FindByNumberResult;
    }

    /**
     * @param DepartmentHandle $Department_FindByNumberResult
     * @return \Economic\Department_FindByNumberResponse
     */
    public function setDepartment_FindByNumberResult($Department_FindByNumberResult)
    {
      $this->Department_FindByNumberResult = $Department_FindByNumberResult;
      return $this;
    }

}
