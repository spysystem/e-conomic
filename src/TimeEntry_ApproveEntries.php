<?php

namespace Economic;

class TimeEntry_ApproveEntries
{

    /**
     * @var ArrayOfTimeEntryHandle $entries
     */
    protected $entries = null;

    /**
     * @param ArrayOfTimeEntryHandle $entries
     */
    public function __construct($entries)
    {
      $this->entries = $entries;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param ArrayOfTimeEntryHandle $entries
     * @return \Economic\TimeEntry_ApproveEntries
     */
    public function setEntries($entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
