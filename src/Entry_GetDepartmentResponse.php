<?php

namespace Economic;

class Entry_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $Entry_GetDepartmentResult
     */
    protected $Entry_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $Entry_GetDepartmentResult
     */
    public function __construct($Entry_GetDepartmentResult)
    {
      $this->Entry_GetDepartmentResult = $Entry_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getEntry_GetDepartmentResult()
    {
      return $this->Entry_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $Entry_GetDepartmentResult
     * @return \Economic\Entry_GetDepartmentResponse
     */
    public function setEntry_GetDepartmentResult($Entry_GetDepartmentResult)
    {
      $this->Entry_GetDepartmentResult = $Entry_GetDepartmentResult;
      return $this;
    }

}
