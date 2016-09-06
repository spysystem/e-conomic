<?php

namespace Economic;

class TimeEntry_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $TimeEntry_GetAllUpdatedResult
     */
    protected $TimeEntry_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_GetAllUpdatedResult
     */
    public function __construct($TimeEntry_GetAllUpdatedResult)
    {
      $this->TimeEntry_GetAllUpdatedResult = $TimeEntry_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getTimeEntry_GetAllUpdatedResult()
    {
      return $this->TimeEntry_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_GetAllUpdatedResult
     * @return \Economic\TimeEntry_GetAllUpdatedResponse
     */
    public function setTimeEntry_GetAllUpdatedResult($TimeEntry_GetAllUpdatedResult)
    {
      $this->TimeEntry_GetAllUpdatedResult = $TimeEntry_GetAllUpdatedResult;
      return $this;
    }

}
