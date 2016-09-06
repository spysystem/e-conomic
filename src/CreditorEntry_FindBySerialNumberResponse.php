<?php

namespace Economic;

class CreditorEntry_FindBySerialNumberResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $CreditorEntry_FindBySerialNumberResult
     */
    protected $CreditorEntry_FindBySerialNumberResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $CreditorEntry_FindBySerialNumberResult
     */
    public function __construct($CreditorEntry_FindBySerialNumberResult)
    {
      $this->CreditorEntry_FindBySerialNumberResult = $CreditorEntry_FindBySerialNumberResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditorEntry_FindBySerialNumberResult()
    {
      return $this->CreditorEntry_FindBySerialNumberResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $CreditorEntry_FindBySerialNumberResult
     * @return \Economic\CreditorEntry_FindBySerialNumberResponse
     */
    public function setCreditorEntry_FindBySerialNumberResult($CreditorEntry_FindBySerialNumberResult)
    {
      $this->CreditorEntry_FindBySerialNumberResult = $CreditorEntry_FindBySerialNumberResult;
      return $this;
    }

}
