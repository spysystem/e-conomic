<?php

namespace Economic;

class Department_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfDepartmentHandle $Department_GetAllUpdatedResult
     */
    protected $Department_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfDepartmentHandle $Department_GetAllUpdatedResult
     */
    public function __construct($Department_GetAllUpdatedResult)
    {
      $this->Department_GetAllUpdatedResult = $Department_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getDepartment_GetAllUpdatedResult()
    {
      return $this->Department_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfDepartmentHandle $Department_GetAllUpdatedResult
     * @return \Economic\Department_GetAllUpdatedResponse
     */
    public function setDepartment_GetAllUpdatedResult($Department_GetAllUpdatedResult)
    {
      $this->Department_GetAllUpdatedResult = $Department_GetAllUpdatedResult;
      return $this;
    }

}
