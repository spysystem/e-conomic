<?php

namespace Economic;

class TimeEntry_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $TimeEntry_CreateFromDataArrayResult
     */
    protected $TimeEntry_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_CreateFromDataArrayResult
     */
    public function __construct($TimeEntry_CreateFromDataArrayResult)
    {
      $this->TimeEntry_CreateFromDataArrayResult = $TimeEntry_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getTimeEntry_CreateFromDataArrayResult()
    {
      return $this->TimeEntry_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_CreateFromDataArrayResult
     * @return \Economic\TimeEntry_CreateFromDataArrayResponse
     */
    public function setTimeEntry_CreateFromDataArrayResult($TimeEntry_CreateFromDataArrayResult)
    {
      $this->TimeEntry_CreateFromDataArrayResult = $TimeEntry_CreateFromDataArrayResult;
      return $this;
    }

}
