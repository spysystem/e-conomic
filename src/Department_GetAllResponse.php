<?php

namespace Economic;

class Department_GetAllResponse
{

    /**
     * @var ArrayOfDepartmentHandle $Department_GetAllResult
     */
    protected $Department_GetAllResult = null;

    /**
     * @param ArrayOfDepartmentHandle $Department_GetAllResult
     */
    public function __construct($Department_GetAllResult)
    {
      $this->Department_GetAllResult = $Department_GetAllResult;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getDepartment_GetAllResult()
    {
      return $this->Department_GetAllResult;
    }

    /**
     * @param ArrayOfDepartmentHandle $Department_GetAllResult
     * @return \Economic\Department_GetAllResponse
     */
    public function setDepartment_GetAllResult($Department_GetAllResult)
    {
      $this->Department_GetAllResult = $Department_GetAllResult;
      return $this;
    }

}
