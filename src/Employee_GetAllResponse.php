<?php

namespace Economic;

class Employee_GetAllResponse
{

    /**
     * @var ArrayOfEmployeeHandle $Employee_GetAllResult
     */
    protected $Employee_GetAllResult = null;

    /**
     * @param ArrayOfEmployeeHandle $Employee_GetAllResult
     */
    public function __construct($Employee_GetAllResult)
    {
      $this->Employee_GetAllResult = $Employee_GetAllResult;
    }

    /**
     * @return ArrayOfEmployeeHandle
     */
    public function getEmployee_GetAllResult()
    {
      return $this->Employee_GetAllResult;
    }

    /**
     * @param ArrayOfEmployeeHandle $Employee_GetAllResult
     * @return \Economic\Employee_GetAllResponse
     */
    public function setEmployee_GetAllResult($Employee_GetAllResult)
    {
      $this->Employee_GetAllResult = $Employee_GetAllResult;
      return $this;
    }

}
