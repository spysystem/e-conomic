<?php

namespace Economic;

class DebtorEntry_MatchEntries
{

    /**
     * @var ArrayOfDebtorEntryHandle $entries
     */
    protected $entries = null;

    /**
     * @param ArrayOfDebtorEntryHandle $entries
     */
    public function __construct($entries)
    {
      $this->entries = $entries;
    }

    /**
     * @return ArrayOfDebtorEntryHandle
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param ArrayOfDebtorEntryHandle $entries
     * @return \Economic\DebtorEntry_MatchEntries
     */
    public function setEntries($entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
