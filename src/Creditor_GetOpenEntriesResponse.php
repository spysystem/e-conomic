<?php

namespace Economic;

class Creditor_GetOpenEntriesResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $Creditor_GetOpenEntriesResult
     */
    protected $Creditor_GetOpenEntriesResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetOpenEntriesResult
     */
    public function __construct($Creditor_GetOpenEntriesResult)
    {
      $this->Creditor_GetOpenEntriesResult = $Creditor_GetOpenEntriesResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditor_GetOpenEntriesResult()
    {
      return $this->Creditor_GetOpenEntriesResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetOpenEntriesResult
     * @return \Economic\Creditor_GetOpenEntriesResponse
     */
    public function setCreditor_GetOpenEntriesResult($Creditor_GetOpenEntriesResult)
    {
      $this->Creditor_GetOpenEntriesResult = $Creditor_GetOpenEntriesResult;
      return $this;
    }

}
