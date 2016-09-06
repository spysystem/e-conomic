<?php

namespace Economic;

class Employee_GetTimeEntriesByDateResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $Employee_GetTimeEntriesByDateResult
     */
    protected $Employee_GetTimeEntriesByDateResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesByDateResult
     */
    public function __construct($Employee_GetTimeEntriesByDateResult)
    {
      $this->Employee_GetTimeEntriesByDateResult = $Employee_GetTimeEntriesByDateResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getEmployee_GetTimeEntriesByDateResult()
    {
      return $this->Employee_GetTimeEntriesByDateResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesByDateResult
     * @return \Economic\Employee_GetTimeEntriesByDateResponse
     */
    public function setEmployee_GetTimeEntriesByDateResult($Employee_GetTimeEntriesByDateResult)
    {
      $this->Employee_GetTimeEntriesByDateResult = $Employee_GetTimeEntriesByDateResult;
      return $this;
    }

}
