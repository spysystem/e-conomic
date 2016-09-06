<?php

namespace Economic;

class Employee_GetDataArrayResponse
{

    /**
     * @var ArrayOfEmployeeData $Employee_GetDataArrayResult
     */
    protected $Employee_GetDataArrayResult = null;

    /**
     * @param ArrayOfEmployeeData $Employee_GetDataArrayResult
     */
    public function __construct($Employee_GetDataArrayResult)
    {
      $this->Employee_GetDataArrayResult = $Employee_GetDataArrayResult;
    }

    /**
     * @return ArrayOfEmployeeData
     */
    public function getEmployee_GetDataArrayResult()
    {
      return $this->Employee_GetDataArrayResult;
    }

    /**
     * @param ArrayOfEmployeeData $Employee_GetDataArrayResult
     * @return \Economic\Employee_GetDataArrayResponse
     */
    public function setEmployee_GetDataArrayResult($Employee_GetDataArrayResult)
    {
      $this->Employee_GetDataArrayResult = $Employee_GetDataArrayResult;
      return $this;
    }

}
