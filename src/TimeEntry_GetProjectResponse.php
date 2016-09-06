<?php

namespace Economic;

class TimeEntry_GetProjectResponse
{

    /**
     * @var ProjectHandle $TimeEntry_GetProjectResult
     */
    protected $TimeEntry_GetProjectResult = null;

    /**
     * @param ProjectHandle $TimeEntry_GetProjectResult
     */
    public function __construct($TimeEntry_GetProjectResult)
    {
      $this->TimeEntry_GetProjectResult = $TimeEntry_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getTimeEntry_GetProjectResult()
    {
      return $this->TimeEntry_GetProjectResult;
    }

    /**
     * @param ProjectHandle $TimeEntry_GetProjectResult
     * @return \Economic\TimeEntry_GetProjectResponse
     */
    public function setTimeEntry_GetProjectResult($TimeEntry_GetProjectResult)
    {
      $this->TimeEntry_GetProjectResult = $TimeEntry_GetProjectResult;
      return $this;
    }

}
