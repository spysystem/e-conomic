<?php

namespace Economic;

class TimeEntry_CreateFromData
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
     * @return \Economic\TimeEntry_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
