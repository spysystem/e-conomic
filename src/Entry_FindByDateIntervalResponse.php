<?php

namespace Economic;

class Entry_FindByDateIntervalResponse
{

    /**
     * @var ArrayOfEntryHandle $Entry_FindByDateIntervalResult
     */
    protected $Entry_FindByDateIntervalResult = null;

    /**
     * @param ArrayOfEntryHandle $Entry_FindByDateIntervalResult
     */
    public function __construct($Entry_FindByDateIntervalResult)
    {
      $this->Entry_FindByDateIntervalResult = $Entry_FindByDateIntervalResult;
    }

    /**
     * @return ArrayOfEntryHandle
     */
    public function getEntry_FindByDateIntervalResult()
    {
      return $this->Entry_FindByDateIntervalResult;
    }

    /**
     * @param ArrayOfEntryHandle $Entry_FindByDateIntervalResult
     * @return \Economic\Entry_FindByDateIntervalResponse
     */
    public function setEntry_FindByDateIntervalResult($Entry_FindByDateIntervalResult)
    {
      $this->Entry_FindByDateIntervalResult = $Entry_FindByDateIntervalResult;
      return $this;
    }

}
