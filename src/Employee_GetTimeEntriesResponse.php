<?php

namespace Economic;

class Employee_GetTimeEntriesResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $Employee_GetTimeEntriesResult
     */
    protected $Employee_GetTimeEntriesResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesResult
     */
    public function __construct($Employee_GetTimeEntriesResult)
    {
      $this->Employee_GetTimeEntriesResult = $Employee_GetTimeEntriesResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getEmployee_GetTimeEntriesResult()
    {
      return $this->Employee_GetTimeEntriesResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesResult
     * @return \Economic\Employee_GetTimeEntriesResponse
     */
    public function setEmployee_GetTimeEntriesResult($Employee_GetTimeEntriesResult)
    {
      $this->Employee_GetTimeEntriesResult = $Employee_GetTimeEntriesResult;
      return $this;
    }

}
