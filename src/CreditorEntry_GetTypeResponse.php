<?php

namespace Economic;

class CreditorEntry_GetTypeResponse
{

    /**
     * @var EntryType $CreditorEntry_GetTypeResult
     */
    protected $CreditorEntry_GetTypeResult = null;

    /**
     * @param EntryType $CreditorEntry_GetTypeResult
     */
    public function __construct($CreditorEntry_GetTypeResult)
    {
      $this->CreditorEntry_GetTypeResult = $CreditorEntry_GetTypeResult;
    }

    /**
     * @return EntryType
     */
    public function getCreditorEntry_GetTypeResult()
    {
      return $this->CreditorEntry_GetTypeResult;
    }

    /**
     * @param EntryType $CreditorEntry_GetTypeResult
     * @return \Economic\CreditorEntry_GetTypeResponse
     */
    public function setCreditorEntry_GetTypeResult($CreditorEntry_GetTypeResult)
    {
      $this->CreditorEntry_GetTypeResult = $CreditorEntry_GetTypeResult;
      return $this;
    }

}
