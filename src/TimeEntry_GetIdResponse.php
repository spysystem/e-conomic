<?php

namespace Economic;

class TimeEntry_GetIdResponse
{

    /**
     * @var int $TimeEntry_GetIdResult
     */
    protected $TimeEntry_GetIdResult = null;

    /**
     * @param int $TimeEntry_GetIdResult
     */
    public function __construct($TimeEntry_GetIdResult)
    {
      $this->TimeEntry_GetIdResult = $TimeEntry_GetIdResult;
    }

    /**
     * @return int
     */
    public function getTimeEntry_GetIdResult()
    {
      return $this->TimeEntry_GetIdResult;
    }

    /**
     * @param int $TimeEntry_GetIdResult
     * @return \Economic\TimeEntry_GetIdResponse
     */
    public function setTimeEntry_GetIdResult($TimeEntry_GetIdResult)
    {
      $this->TimeEntry_GetIdResult = $TimeEntry_GetIdResult;
      return $this;
    }

}
