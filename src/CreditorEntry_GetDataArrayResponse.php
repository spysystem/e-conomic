<?php

namespace Economic;

class CreditorEntry_GetDataArrayResponse
{

    /**
     * @var ArrayOfCreditorEntryData $CreditorEntry_GetDataArrayResult
     */
    protected $CreditorEntry_GetDataArrayResult = null;

    /**
     * @param ArrayOfCreditorEntryData $CreditorEntry_GetDataArrayResult
     */
    public function __construct($CreditorEntry_GetDataArrayResult)
    {
      $this->CreditorEntry_GetDataArrayResult = $CreditorEntry_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorEntryData
     */
    public function getCreditorEntry_GetDataArrayResult()
    {
      return $this->CreditorEntry_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorEntryData $CreditorEntry_GetDataArrayResult
     * @return \Economic\CreditorEntry_GetDataArrayResponse
     */
    public function setCreditorEntry_GetDataArrayResult($CreditorEntry_GetDataArrayResult)
    {
      $this->CreditorEntry_GetDataArrayResult = $CreditorEntry_GetDataArrayResult;
      return $this;
    }

}
