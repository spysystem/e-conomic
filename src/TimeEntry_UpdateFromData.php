<?php

namespace Economic;

class TimeEntry_UpdateFromData
{

    /**
     * @var TimeEntryData $data
     */
    protected $data = null;

    /**
     * @param TimeEntryData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return TimeEntryData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param TimeEntryData $data
     * @return \Economic\TimeEntry_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
