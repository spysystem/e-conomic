<?php

namespace Economic;

class Employee_CreateResponse
{

    /**
     * @var EmployeeHandle $Employee_CreateResult
     */
    protected $Employee_CreateResult = null;

    /**
     * @param EmployeeHandle $Employee_CreateResult
     */
    public function __construct($Employee_CreateResult)
    {
      $this->Employee_CreateResult = $Employee_CreateResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployee_CreateResult()
    {
      return $this->Employee_CreateResult;
    }

    /**
     * @param EmployeeHandle $Employee_CreateResult
     * @return \Economic\Employee_CreateResponse
     */
    public function setEmployee_CreateResult($Employee_CreateResult)
    {
      $this->Employee_CreateResult = $Employee_CreateResult;
      return $this;
    }

}
