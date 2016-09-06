<?php

namespace Economic;

class Employee_FindByNumberListResponse
{

    /**
     * @var ArrayOfEmployeeHandle $Employee_FindByNumberListResult
     */
    protected $Employee_FindByNumberListResult = null;

    /**
     * @param ArrayOfEmployeeHandle $Employee_FindByNumberListResult
     */
    public function __construct($Employee_FindByNumberListResult)
    {
      $this->Employee_FindByNumberListResult = $Employee_FindByNumberListResult;
    }

    /**
     * @return ArrayOfEmployeeHandle
     */
    public function getEmployee_FindByNumberListResult()
    {
      return $this->Employee_FindByNumberListResult;
    }

    /**
     * @param ArrayOfEmployeeHandle $Employee_FindByNumberListResult
     * @return \Economic\Employee_FindByNumberListResponse
     */
    public function setEmployee_FindByNumberListResult($Employee_FindByNumberListResult)
    {
      $this->Employee_FindByNumberListResult = $Employee_FindByNumberListResult;
      return $this;
    }

}
