<?php

namespace Economic;

class TimeEntry_GetNumberOfHoursResponse
{

    /**
     * @var float $TimeEntry_GetNumberOfHoursResult
     */
    protected $TimeEntry_GetNumberOfHoursResult = null;

    /**
     * @param float $TimeEntry_GetNumberOfHoursResult
     */
    public function __construct($TimeEntry_GetNumberOfHoursResult)
    {
      $this->TimeEntry_GetNumberOfHoursResult = $TimeEntry_GetNumberOfHoursResult;
    }

    /**
     * @return float
     */
    public function getTimeEntry_GetNumberOfHoursResult()
    {
      return $this->TimeEntry_GetNumberOfHoursResult;
    }

    /**
     * @param float $TimeEntry_GetNumberOfHoursResult
     * @return \Economic\TimeEntry_GetNumberOfHoursResponse
     */
    public function setTimeEntry_GetNumberOfHoursResult($TimeEntry_GetNumberOfHoursResult)
    {
      $this->TimeEntry_GetNumberOfHoursResult = $TimeEntry_GetNumberOfHoursResult;
      return $this;
    }

}
