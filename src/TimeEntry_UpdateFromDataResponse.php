<?php

namespace Economic;

class TimeEntry_UpdateFromDataResponse
{

    /**
     * @var TimeEntryHandle $TimeEntry_UpdateFromDataResult
     */
    protected $TimeEntry_UpdateFromDataResult = null;

    /**
     * @param TimeEntryHandle $TimeEntry_UpdateFromDataResult
     */
    public function __construct($TimeEntry_UpdateFromDataResult)
    {
      $this->TimeEntry_UpdateFromDataResult = $TimeEntry_UpdateFromDataResult;
    }

    /**
     * @return TimeEntryHandle
     */
    public function getTimeEntry_UpdateFromDataResult()
    {
      return $this->TimeEntry_UpdateFromDataResult;
    }

    /**
     * @param TimeEntryHandle $TimeEntry_UpdateFromDataResult
     * @return \Economic\TimeEntry_UpdateFromDataResponse
     */
    public function setTimeEntry_UpdateFromDataResult($TimeEntry_UpdateFromDataResult)
    {
      $this->TimeEntry_UpdateFromDataResult = $TimeEntry_UpdateFromDataResult;
      return $this;
    }

}
