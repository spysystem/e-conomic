<?php

namespace Economic;

class Employee_CreateFromDataResponse
{

    /**
     * @var EmployeeHandle $Employee_CreateFromDataResult
     */
    protected $Employee_CreateFromDataResult = null;

    /**
     * @param EmployeeHandle $Employee_CreateFromDataResult
     */
    public function __construct($Employee_CreateFromDataResult)
    {
      $this->Employee_CreateFromDataResult = $Employee_CreateFromDataResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployee_CreateFromDataResult()
    {
      return $this->Employee_CreateFromDataResult;
    }

    /**
     * @param EmployeeHandle $Employee_CreateFromDataResult
     * @return \Economic\Employee_CreateFromDataResponse
     */
    public function setEmployee_CreateFromDataResult($Employee_CreateFromDataResult)
    {
      $this->Employee_CreateFromDataResult = $Employee_CreateFromDataResult;
      return $this;
    }

}
