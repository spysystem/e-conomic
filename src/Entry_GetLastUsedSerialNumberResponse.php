<?php

namespace Economic;

class Entry_GetLastUsedSerialNumberResponse
{

    /**
     * @var int $Entry_GetLastUsedSerialNumberResult
     */
    protected $Entry_GetLastUsedSerialNumberResult = null;

    /**
     * @param int $Entry_GetLastUsedSerialNumberResult
     */
    public function __construct($Entry_GetLastUsedSerialNumberResult)
    {
      $this->Entry_GetLastUsedSerialNumberResult = $Entry_GetLastUsedSerialNumberResult;
    }

    /**
     * @return int
     */
    public function getEntry_GetLastUsedSerialNumberResult()
    {
      return $this->Entry_GetLastUsedSerialNumberResult;
    }

    /**
     * @param int $Entry_GetLastUsedSerialNumberResult
     * @return \Economic\Entry_GetLastUsedSerialNumberResponse
     */
    public function setEntry_GetLastUsedSerialNumberResult($Entry_GetLastUsedSerialNumberResult)
    {
      $this->Entry_GetLastUsedSerialNumberResult = $Entry_GetLastUsedSerialNumberResult;
      return $this;
    }

}
