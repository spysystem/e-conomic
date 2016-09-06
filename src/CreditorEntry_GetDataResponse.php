<?php

namespace Economic;

class CreditorEntry_GetDataResponse
{

    /**
     * @var CreditorEntryData $CreditorEntry_GetDataResult
     */
    protected $CreditorEntry_GetDataResult = null;

    /**
     * @param CreditorEntryData $CreditorEntry_GetDataResult
     */
    public function __construct($CreditorEntry_GetDataResult)
    {
      $this->CreditorEntry_GetDataResult = $CreditorEntry_GetDataResult;
    }

    /**
     * @return CreditorEntryData
     */
    public function getCreditorEntry_GetDataResult()
    {
      return $this->CreditorEntry_GetDataResult;
    }

    /**
     * @param CreditorEntryData $CreditorEntry_GetDataResult
     * @return \Economic\CreditorEntry_GetDataResponse
     */
    public function setCreditorEntry_GetDataResult($CreditorEntry_GetDataResult)
    {
      $this->CreditorEntry_GetDataResult = $CreditorEntry_GetDataResult;
      return $this;
    }

}
