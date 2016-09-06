<?php

namespace Economic;

class Department_FindByNumberListResponse
{

    /**
     * @var ArrayOfDepartmentHandle $Department_FindByNumberListResult
     */
    protected $Department_FindByNumberListResult = null;

    /**
     * @param ArrayOfDepartmentHandle $Department_FindByNumberListResult
     */
    public function __construct($Department_FindByNumberListResult)
    {
      $this->Department_FindByNumberListResult = $Department_FindByNumberListResult;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getDepartment_FindByNumberListResult()
    {
      return $this->Department_FindByNumberListResult;
    }

    /**
     * @param ArrayOfDepartmentHandle $Department_FindByNumberListResult
     * @return \Economic\Department_FindByNumberListResponse
     */
    public function setDepartment_FindByNumberListResult($Department_FindByNumberListResult)
    {
      $this->Department_FindByNumberListResult = $Department_FindByNumberListResult;
      return $this;
    }

}
