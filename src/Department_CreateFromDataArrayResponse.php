<?php

namespace Economic;

class Department_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfDepartmentHandle $Department_CreateFromDataArrayResult
     */
    protected $Department_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfDepartmentHandle $Department_CreateFromDataArrayResult
     */
    public function __construct($Department_CreateFromDataArrayResult)
    {
      $this->Department_CreateFromDataArrayResult = $Department_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getDepartment_CreateFromDataArrayResult()
    {
      return $this->Department_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDepartmentHandle $Department_CreateFromDataArrayResult
     * @return \Economic\Department_CreateFromDataArrayResponse
     */
    public function setDepartment_CreateFromDataArrayResult($Department_CreateFromDataArrayResult)
    {
      $this->Department_CreateFromDataArrayResult = $Department_CreateFromDataArrayResult;
      return $this;
    }

}
