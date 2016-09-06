<?php

namespace Economic;

class TimeEntry_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $TimeEntry_UpdateFromDataArrayResult
     */
    protected $TimeEntry_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_UpdateFromDataArrayResult
     */
    public function __construct($TimeEntry_UpdateFromDataArrayResult)
    {
      $this->TimeEntry_UpdateFromDataArrayResult = $TimeEntry_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getTimeEntry_UpdateFromDataArrayResult()
    {
      return $this->TimeEntry_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_UpdateFromDataArrayResult
     * @return \Economic\TimeEntry_UpdateFromDataArrayResponse
     */
    public function setTimeEntry_UpdateFromDataArrayResult($TimeEntry_UpdateFromDataArrayResult)
    {
      $this->TimeEntry_UpdateFromDataArrayResult = $TimeEntry_UpdateFromDataArrayResult;
      return $this;
    }

}
