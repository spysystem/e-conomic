<?php

namespace Economic;

class Department_UpdateFromDataResponse
{

    /**
     * @var DepartmentHandle $Department_UpdateFromDataResult
     */
    protected $Department_UpdateFromDataResult = null;

    /**
     * @param DepartmentHandle $Department_UpdateFromDataResult
     */
    public function __construct($Department_UpdateFromDataResult)
    {
      $this->Department_UpdateFromDataResult = $Department_UpdateFromDataResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getDepartment_UpdateFromDataResult()
    {
      return $this->Department_UpdateFromDataResult;
    }

    /**
     * @param DepartmentHandle $Department_UpdateFromDataResult
     * @return \Economic\Department_UpdateFromDataResponse
     */
    public function setDepartment_UpdateFromDataResult($Department_UpdateFromDataResult)
    {
      $this->Department_UpdateFromDataResult = $Department_UpdateFromDataResult;
      return $this;
    }

}
