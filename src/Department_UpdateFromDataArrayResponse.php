<?php

namespace Economic;

class Department_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfDepartmentHandle $Department_UpdateFromDataArrayResult
     */
    protected $Department_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfDepartmentHandle $Department_UpdateFromDataArrayResult
     */
    public function __construct($Department_UpdateFromDataArrayResult)
    {
      $this->Department_UpdateFromDataArrayResult = $Department_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getDepartment_UpdateFromDataArrayResult()
    {
      return $this->Department_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDepartmentHandle $Department_UpdateFromDataArrayResult
     * @return \Economic\Department_UpdateFromDataArrayResponse
     */
    public function setDepartment_UpdateFromDataArrayResult($Department_UpdateFromDataArrayResult)
    {
      $this->Department_UpdateFromDataArrayResult = $Department_UpdateFromDataArrayResult;
      return $this;
    }

}
