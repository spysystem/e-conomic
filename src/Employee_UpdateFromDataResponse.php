<?php

namespace Economic;

class Employee_UpdateFromDataResponse
{

    /**
     * @var EmployeeHandle $Employee_UpdateFromDataResult
     */
    protected $Employee_UpdateFromDataResult = null;

    /**
     * @param EmployeeHandle $Employee_UpdateFromDataResult
     */
    public function __construct($Employee_UpdateFromDataResult)
    {
      $this->Employee_UpdateFromDataResult = $Employee_UpdateFromDataResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployee_UpdateFromDataResult()
    {
      return $this->Employee_UpdateFromDataResult;
    }

    /**
     * @param EmployeeHandle $Employee_UpdateFromDataResult
     * @return \Economic\Employee_UpdateFromDataResponse
     */
    public function setEmployee_UpdateFromDataResult($Employee_UpdateFromDataResult)
    {
      $this->Employee_UpdateFromDataResult = $Employee_UpdateFromDataResult;
      return $this;
    }

}
