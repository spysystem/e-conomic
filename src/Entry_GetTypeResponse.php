<?php

namespace Economic;

class Entry_GetTypeResponse
{

    /**
     * @var EntryType $Entry_GetTypeResult
     */
    protected $Entry_GetTypeResult = null;

    /**
     * @param EntryType $Entry_GetTypeResult
     */
    public function __construct($Entry_GetTypeResult)
    {
      $this->Entry_GetTypeResult = $Entry_GetTypeResult;
    }

    /**
     * @return EntryType
     */
    public function getEntry_GetTypeResult()
    {
      return $this->Entry_GetTypeResult;
    }

    /**
     * @param EntryType $Entry_GetTypeResult
     * @return \Economic\Entry_GetTypeResponse
     */
    public function setEntry_GetTypeResult($Entry_GetTypeResult)
    {
      $this->Entry_GetTypeResult = $Entry_GetTypeResult;
      return $this;
    }

}
