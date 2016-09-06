<?php

namespace Economic;

class Entry_GetDataArrayResponse
{

    /**
     * @var ArrayOfEntryData $Entry_GetDataArrayResult
     */
    protected $Entry_GetDataArrayResult = null;

    /**
     * @param ArrayOfEntryData $Entry_GetDataArrayResult
     */
    public function __construct($Entry_GetDataArrayResult)
    {
      $this->Entry_GetDataArrayResult = $Entry_GetDataArrayResult;
    }

    /**
     * @return ArrayOfEntryData
     */
    public function getEntry_GetDataArrayResult()
    {
      return $this->Entry_GetDataArrayResult;
    }

    /**
     * @param ArrayOfEntryData $Entry_GetDataArrayResult
     * @return \Economic\Entry_GetDataArrayResponse
     */
    public function setEntry_GetDataArrayResult($Entry_GetDataArrayResult)
    {
      $this->Entry_GetDataArrayResult = $Entry_GetDataArrayResult;
      return $this;
    }

}
