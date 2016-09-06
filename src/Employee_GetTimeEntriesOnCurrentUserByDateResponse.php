<?php

namespace Economic;

class Employee_GetTimeEntriesOnCurrentUserByDateResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $Employee_GetTimeEntriesOnCurrentUserByDateResult
     */
    protected $Employee_GetTimeEntriesOnCurrentUserByDateResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesOnCurrentUserByDateResult
     */
    public function __construct($Employee_GetTimeEntriesOnCurrentUserByDateResult)
    {
      $this->Employee_GetTimeEntriesOnCurrentUserByDateResult = $Employee_GetTimeEntriesOnCurrentUserByDateResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getEmployee_GetTimeEntriesOnCurrentUserByDateResult()
    {
      return $this->Employee_GetTimeEntriesOnCurrentUserByDateResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesOnCurrentUserByDateResult
     * @return \Economic\Employee_GetTimeEntriesOnCurrentUserByDateResponse
     */
    public function setEmployee_GetTimeEntriesOnCurrentUserByDateResult($Employee_GetTimeEntriesOnCurrentUserByDateResult)
    {
      $this->Employee_GetTimeEntriesOnCurrentUserByDateResult = $Employee_GetTimeEntriesOnCurrentUserByDateResult;
      return $this;
    }

}
