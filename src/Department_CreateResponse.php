<?php

namespace Economic;

class Department_CreateResponse
{

    /**
     * @var DepartmentHandle $Department_CreateResult
     */
    protected $Department_CreateResult = null;

    /**
     * @param DepartmentHandle $Department_CreateResult
     */
    public function __construct($Department_CreateResult)
    {
      $this->Department_CreateResult = $Department_CreateResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getDepartment_CreateResult()
    {
      return $this->Department_CreateResult;
    }

    /**
     * @param DepartmentHandle $Department_CreateResult
     * @return \Economic\Department_CreateResponse
     */
    public function setDepartment_CreateResult($Department_CreateResult)
    {
      $this->Department_CreateResult = $Department_CreateResult;
      return $this;
    }

}
