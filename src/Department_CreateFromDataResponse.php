<?php

namespace Economic;

class Department_CreateFromDataResponse
{

    /**
     * @var DepartmentHandle $Department_CreateFromDataResult
     */
    protected $Department_CreateFromDataResult = null;

    /**
     * @param DepartmentHandle $Department_CreateFromDataResult
     */
    public function __construct($Department_CreateFromDataResult)
    {
      $this->Department_CreateFromDataResult = $Department_CreateFromDataResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getDepartment_CreateFromDataResult()
    {
      return $this->Department_CreateFromDataResult;
    }

    /**
     * @param DepartmentHandle $Department_CreateFromDataResult
     * @return \Economic\Department_CreateFromDataResponse
     */
    public function setDepartment_CreateFromDataResult($Department_CreateFromDataResult)
    {
      $this->Department_CreateFromDataResult = $Department_CreateFromDataResult;
      return $this;
    }

}
