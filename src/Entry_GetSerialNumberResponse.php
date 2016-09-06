<?php

namespace Economic;

class Entry_GetSerialNumberResponse
{

    /**
     * @var int $Entry_GetSerialNumberResult
     */
    protected $Entry_GetSerialNumberResult = null;

    /**
     * @param int $Entry_GetSerialNumberResult
     */
    public function __construct($Entry_GetSerialNumberResult)
    {
      $this->Entry_GetSerialNumberResult = $Entry_GetSerialNumberResult;
    }

    /**
     * @return int
     */
    public function getEntry_GetSerialNumberResult()
    {
      return $this->Entry_GetSerialNumberResult;
    }

    /**
     * @param int $Entry_GetSerialNumberResult
     * @return \Economic\Entry_GetSerialNumberResponse
     */
    public function setEntry_GetSerialNumberResult($Entry_GetSerialNumberResult)
    {
      $this->Entry_GetSerialNumberResult = $Entry_GetSerialNumberResult;
      return $this;
    }

}
