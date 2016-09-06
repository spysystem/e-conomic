<?php

namespace Economic;

class Department_GetDataArrayResponse
{

    /**
     * @var ArrayOfDepartmentData $Department_GetDataArrayResult
     */
    protected $Department_GetDataArrayResult = null;

    /**
     * @param ArrayOfDepartmentData $Department_GetDataArrayResult
     */
    public function __construct($Department_GetDataArrayResult)
    {
      $this->Department_GetDataArrayResult = $Department_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDepartmentData
     */
    public function getDepartment_GetDataArrayResult()
    {
      return $this->Department_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDepartmentData $Department_GetDataArrayResult
     * @return \Economic\Department_GetDataArrayResponse
     */
    public function setDepartment_GetDataArrayResult($Department_GetDataArrayResult)
    {
      $this->Department_GetDataArrayResult = $Department_GetDataArrayResult;
      return $this;
    }

}
