<?php

namespace Economic;

class TimeEntry_CreateFromDataResponse
{

    /**
     * @var TimeEntryHandle $TimeEntry_CreateFromDataResult
     */
    protected $TimeEntry_CreateFromDataResult = null;

    /**
     * @param TimeEntryHandle $TimeEntry_CreateFromDataResult
     */
    public function __construct($TimeEntry_CreateFromDataResult)
    {
      $this->TimeEntry_CreateFromDataResult = $TimeEntry_CreateFromDataResult;
    }

    /**
     * @return TimeEntryHandle
     */
    public function getTimeEntry_CreateFromDataResult()
    {
      return $this->TimeEntry_CreateFromDataResult;
    }

    /**
     * @param TimeEntryHandle $TimeEntry_CreateFromDataResult
     * @return \Economic\TimeEntry_CreateFromDataResponse
     */
    public function setTimeEntry_CreateFromDataResult($TimeEntry_CreateFromDataResult)
    {
      $this->TimeEntry_CreateFromDataResult = $TimeEntry_CreateFromDataResult;
      return $this;
    }

}
