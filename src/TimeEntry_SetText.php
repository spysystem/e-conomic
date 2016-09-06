<?php

namespace Economic;

class TimeEntry_SetText
{

    /**
     * @var TimeEntryHandle $timeEntryHandle
     */
    protected $timeEntryHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param TimeEntryHandle $timeEntryHandle
     * @param string $value
     */
    public function __construct($timeEntryHandle, $value)
    {
      $this->timeEntryHandle = $timeEntryHandle;
      $this->value = $value;
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
     * @return \Economic\TimeEntry_SetText
     */
    public function setTimeEntryHandle($timeEntryHandle)
    {
      $this->timeEntryHandle = $timeEntryHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\TimeEntry_SetText
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
