<?php

namespace Economic;

class TimeEntry_GetEmployeeResponse
{

    /**
     * @var EmployeeHandle $TimeEntry_GetEmployeeResult
     */
    protected $TimeEntry_GetEmployeeResult = null;

    /**
     * @param EmployeeHandle $TimeEntry_GetEmployeeResult
     */
    public function __construct($TimeEntry_GetEmployeeResult)
    {
      $this->TimeEntry_GetEmployeeResult = $TimeEntry_GetEmployeeResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getTimeEntry_GetEmployeeResult()
    {
      return $this->TimeEntry_GetEmployeeResult;
    }

    /**
     * @param EmployeeHandle $TimeEntry_GetEmployeeResult
     * @return \Economic\TimeEntry_GetEmployeeResponse
     */
    public function setTimeEntry_GetEmployeeResult($TimeEntry_GetEmployeeResult)
    {
      $this->TimeEntry_GetEmployeeResult = $TimeEntry_GetEmployeeResult;
      return $this;
    }

}
