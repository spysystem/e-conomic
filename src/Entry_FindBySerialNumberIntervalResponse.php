<?php

namespace Economic;

class Entry_FindBySerialNumberIntervalResponse
{

    /**
     * @var ArrayOfEntryHandle $Entry_FindBySerialNumberIntervalResult
     */
    protected $Entry_FindBySerialNumberIntervalResult = null;

    /**
     * @param ArrayOfEntryHandle $Entry_FindBySerialNumberIntervalResult
     */
    public function __construct($Entry_FindBySerialNumberIntervalResult)
    {
      $this->Entry_FindBySerialNumberIntervalResult = $Entry_FindBySerialNumberIntervalResult;
    }

    /**
     * @return ArrayOfEntryHandle
     */
    public function getEntry_FindBySerialNumberIntervalResult()
    {
      return $this->Entry_FindBySerialNumberIntervalResult;
    }

    /**
     * @param ArrayOfEntryHandle $Entry_FindBySerialNumberIntervalResult
     * @return \Economic\Entry_FindBySerialNumberIntervalResponse
     */
    public function setEntry_FindBySerialNumberIntervalResult($Entry_FindBySerialNumberIntervalResult)
    {
      $this->Entry_FindBySerialNumberIntervalResult = $Entry_FindBySerialNumberIntervalResult;
      return $this;
    }

}
