<?php

namespace Economic;

class TimeEntry_GetDataResponse
{

    /**
     * @var TimeEntryData $TimeEntry_GetDataResult
     */
    protected $TimeEntry_GetDataResult = null;

    /**
     * @param TimeEntryData $TimeEntry_GetDataResult
     */
    public function __construct($TimeEntry_GetDataResult)
    {
      $this->TimeEntry_GetDataResult = $TimeEntry_GetDataResult;
    }

    /**
     * @return TimeEntryData
     */
    public function getTimeEntry_GetDataResult()
    {
      return $this->TimeEntry_GetDataResult;
    }

    /**
     * @param TimeEntryData $TimeEntry_GetDataResult
     * @return \Economic\TimeEntry_GetDataResponse
     */
    public function setTimeEntry_GetDataResult($TimeEntry_GetDataResult)
    {
      $this->TimeEntry_GetDataResult = $TimeEntry_GetDataResult;
      return $this;
    }

}
