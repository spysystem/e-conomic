<?php

namespace Economic;

class CreditorEntry_GetSerialNumberResponse
{

    /**
     * @var int $CreditorEntry_GetSerialNumberResult
     */
    protected $CreditorEntry_GetSerialNumberResult = null;

    /**
     * @param int $CreditorEntry_GetSerialNumberResult
     */
    public function __construct($CreditorEntry_GetSerialNumberResult)
    {
      $this->CreditorEntry_GetSerialNumberResult = $CreditorEntry_GetSerialNumberResult;
    }

    /**
     * @return int
     */
    public function getCreditorEntry_GetSerialNumberResult()
    {
      return $this->CreditorEntry_GetSerialNumberResult;
    }

    /**
     * @param int $CreditorEntry_GetSerialNumberResult
     * @return \Economic\CreditorEntry_GetSerialNumberResponse
     */
    public function setCreditorEntry_GetSerialNumberResult($CreditorEntry_GetSerialNumberResult)
    {
      $this->CreditorEntry_GetSerialNumberResult = $CreditorEntry_GetSerialNumberResult;
      return $this;
    }

}
