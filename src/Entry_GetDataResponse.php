<?php

namespace Economic;

class Entry_GetDataResponse
{

    /**
     * @var EntryData $Entry_GetDataResult
     */
    protected $Entry_GetDataResult = null;

    /**
     * @param EntryData $Entry_GetDataResult
     */
    public function __construct($Entry_GetDataResult)
    {
      $this->Entry_GetDataResult = $Entry_GetDataResult;
    }

    /**
     * @return EntryData
     */
    public function getEntry_GetDataResult()
    {
      return $this->Entry_GetDataResult;
    }

    /**
     * @param EntryData $Entry_GetDataResult
     * @return \Economic\Entry_GetDataResponse
     */
    public function setEntry_GetDataResult($Entry_GetDataResult)
    {
      $this->Entry_GetDataResult = $Entry_GetDataResult;
      return $this;
    }

}
