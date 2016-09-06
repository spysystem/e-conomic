<?php

namespace Economic;

class Department_GetDataResponse
{

    /**
     * @var DepartmentData $Department_GetDataResult
     */
    protected $Department_GetDataResult = null;

    /**
     * @param DepartmentData $Department_GetDataResult
     */
    public function __construct($Department_GetDataResult)
    {
      $this->Department_GetDataResult = $Department_GetDataResult;
    }

    /**
     * @return DepartmentData
     */
    public function getDepartment_GetDataResult()
    {
      return $this->Department_GetDataResult;
    }

    /**
     * @param DepartmentData $Department_GetDataResult
     * @return \Economic\Department_GetDataResponse
     */
    public function setDepartment_GetDataResult($Department_GetDataResult)
    {
      $this->Department_GetDataResult = $Department_GetDataResult;
      return $this;
    }

}
