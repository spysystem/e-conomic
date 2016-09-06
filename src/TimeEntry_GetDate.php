<?php

namespace Economic;

class TimeEntry_GetDate
{

    /**
     * @var TimeEntryHandle $timeEntryHandle
     */
    protected $timeEntryHandle = null;

    /**
     * @param TimeEntryHandle $timeEntryHandle
     */
    public function __construct($timeEntryHandle)
    {
      $this->timeEntryHandle = $timeEntryHandle;
    }

    /**
     * @return TimeEntryHandle
     */
    public function getTimeEntryHandle()
    {
      return $this->timeEntryHandle;
    }

    /**
     * @param TimeEntryHandle $timeEntryHandle
     * @return \Economic\TimeEntry_GetDate
     */
    public function setTimeEntryHandle($timeEntryHandle)
    {
      $this->timeEntryHandle = $timeEntryHandle;
      return $this;
    }

}
