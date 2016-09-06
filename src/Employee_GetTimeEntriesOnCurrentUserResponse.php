<?php

namespace Economic;

class Employee_GetTimeEntriesOnCurrentUserResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $Employee_GetTimeEntriesOnCurrentUserResult
     */
    protected $Employee_GetTimeEntriesOnCurrentUserResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesOnCurrentUserResult
     */
    public function __construct($Employee_GetTimeEntriesOnCurrentUserResult)
    {
      $this->Employee_GetTimeEntriesOnCurrentUserResult = $Employee_GetTimeEntriesOnCurrentUserResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getEmployee_GetTimeEntriesOnCurrentUserResult()
    {
      return $this->Employee_GetTimeEntriesOnCurrentUserResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $Employee_GetTimeEntriesOnCurrentUserResult
     * @return \Economic\Employee_GetTimeEntriesOnCurrentUserResponse
     */
    public function setEmployee_GetTimeEntriesOnCurrentUserResult($Employee_GetTimeEntriesOnCurrentUserResult)
    {
      $this->Employee_GetTimeEntriesOnCurrentUserResult = $Employee_GetTimeEntriesOnCurrentUserResult;
      return $this;
    }

}
