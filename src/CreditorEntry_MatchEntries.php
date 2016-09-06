<?php

namespace Economic;

class CreditorEntry_MatchEntries
{

    /**
     * @var ArrayOfCreditorEntryHandle $entries
     */
    protected $entries = null;

    /**
     * @param ArrayOfCreditorEntryHandle $entries
     */
    public function __construct($entries)
    {
      $this->entries = $entries;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $entries
     * @return \Economic\CreditorEntry_MatchEntries
     */
    public function setEntries($entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
