<?php

namespace Economic;

class Department_FindByNameResponse
{

    /**
     * @var ArrayOfDepartmentHandle $Department_FindByNameResult
     */
    protected $Department_FindByNameResult = null;

    /**
     * @param ArrayOfDepartmentHandle $Department_FindByNameResult
     */
    public function __construct($Department_FindByNameResult)
    {
      $this->Department_FindByNameResult = $Department_FindByNameResult;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getDepartment_FindByNameResult()
    {
      return $this->Department_FindByNameResult;
    }

    /**
     * @param ArrayOfDepartmentHandle $Department_FindByNameResult
     * @return \Economic\Department_FindByNameResponse
     */
    public function setDepartment_FindByNameResult($Department_FindByNameResult)
    {
      $this->Department_FindByNameResult = $Department_FindByNameResult;
      return $this;
    }

}
