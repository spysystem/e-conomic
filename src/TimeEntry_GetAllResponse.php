<?php

namespace Economic;

class TimeEntry_GetAllResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $TimeEntry_GetAllResult
     */
    protected $TimeEntry_GetAllResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_GetAllResult
     */
    public function __construct($TimeEntry_GetAllResult)
    {
      $this->TimeEntry_GetAllResult = $TimeEntry_GetAllResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getTimeEntry_GetAllResult()
    {
      return $this->TimeEntry_GetAllResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_GetAllResult
     * @return \Economic\TimeEntry_GetAllResponse
     */
    public function setTimeEntry_GetAllResult($TimeEntry_GetAllResult)
    {
      $this->TimeEntry_GetAllResult = $TimeEntry_GetAllResult;
      return $this;
    }

}
