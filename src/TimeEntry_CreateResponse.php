<?php

namespace Economic;

class TimeEntry_CreateResponse
{

    /**
     * @var TimeEntryHandle $TimeEntry_CreateResult
     */
    protected $TimeEntry_CreateResult = null;

    /**
     * @param TimeEntryHandle $TimeEntry_CreateResult
     */
    public function __construct($TimeEntry_CreateResult)
    {
      $this->TimeEntry_CreateResult = $TimeEntry_CreateResult;
    }

    /**
     * @return TimeEntryHandle
     */
    public function getTimeEntry_CreateResult()
    {
      return $this->TimeEntry_CreateResult;
    }

    /**
     * @param TimeEntryHandle $TimeEntry_CreateResult
     * @return \Economic\TimeEntry_CreateResponse
     */
    public function setTimeEntry_CreateResult($TimeEntry_CreateResult)
    {
      $this->TimeEntry_CreateResult = $TimeEntry_CreateResult;
      return $this;
    }

}
