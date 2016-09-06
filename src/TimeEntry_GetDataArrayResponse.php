<?php

namespace Economic;

class TimeEntry_GetDataArrayResponse
{

    /**
     * @var ArrayOfTimeEntryData $TimeEntry_GetDataArrayResult
     */
    protected $TimeEntry_GetDataArrayResult = null;

    /**
     * @param ArrayOfTimeEntryData $TimeEntry_GetDataArrayResult
     */
    public function __construct($TimeEntry_GetDataArrayResult)
    {
      $this->TimeEntry_GetDataArrayResult = $TimeEntry_GetDataArrayResult;
    }

    /**
     * @return ArrayOfTimeEntryData
     */
    public function getTimeEntry_GetDataArrayResult()
    {
      return $this->TimeEntry_GetDataArrayResult;
    }

    /**
     * @param ArrayOfTimeEntryData $TimeEntry_GetDataArrayResult
     * @return \Economic\TimeEntry_GetDataArrayResponse
     */
    public function setTimeEntry_GetDataArrayResult($TimeEntry_GetDataArrayResult)
    {
      $this->TimeEntry_GetDataArrayResult = $TimeEntry_GetDataArrayResult;
      return $this;
    }

}
