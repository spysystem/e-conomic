<?php

namespace Economic;

class TimeEntry_GetActivityResponse
{

    /**
     * @var ActivityHandle $TimeEntry_GetActivityResult
     */
    protected $TimeEntry_GetActivityResult = null;

    /**
     * @param ActivityHandle $TimeEntry_GetActivityResult
     */
    public function __construct($TimeEntry_GetActivityResult)
    {
      $this->TimeEntry_GetActivityResult = $TimeEntry_GetActivityResult;
    }

    /**
     * @return ActivityHandle
     */
    public function getTimeEntry_GetActivityResult()
    {
      return $this->TimeEntry_GetActivityResult;
    }

    /**
     * @param ActivityHandle $TimeEntry_GetActivityResult
     * @return \Economic\TimeEntry_GetActivityResponse
     */
    public function setTimeEntry_GetActivityResult($TimeEntry_GetActivityResult)
    {
      $this->TimeEntry_GetActivityResult = $TimeEntry_GetActivityResult;
      return $this;
    }

}
