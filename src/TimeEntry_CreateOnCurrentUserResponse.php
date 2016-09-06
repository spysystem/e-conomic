<?php

namespace Economic;

class TimeEntry_CreateOnCurrentUserResponse
{

    /**
     * @var TimeEntryHandle $TimeEntry_CreateOnCurrentUserResult
     */
    protected $TimeEntry_CreateOnCurrentUserResult = null;

    /**
     * @param TimeEntryHandle $TimeEntry_CreateOnCurrentUserResult
     */
    public function __construct($TimeEntry_CreateOnCurrentUserResult)
    {
      $this->TimeEntry_CreateOnCurrentUserResult = $TimeEntry_CreateOnCurrentUserResult;
    }

    /**
     * @return TimeEntryHandle
     */
    public function getTimeEntry_CreateOnCurrentUserResult()
    {
      return $this->TimeEntry_CreateOnCurrentUserResult;
    }

    /**
     * @param TimeEntryHandle $TimeEntry_CreateOnCurrentUserResult
     * @return \Economic\TimeEntry_CreateOnCurrentUserResponse
     */
    public function setTimeEntry_CreateOnCurrentUserResult($TimeEntry_CreateOnCurrentUserResult)
    {
      $this->TimeEntry_CreateOnCurrentUserResult = $TimeEntry_CreateOnCurrentUserResult;
      return $this;
    }

}
