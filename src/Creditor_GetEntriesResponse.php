<?php

namespace Economic;

class Creditor_GetEntriesResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $Creditor_GetEntriesResult
     */
    protected $Creditor_GetEntriesResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesResult
     */
    public function __construct($Creditor_GetEntriesResult)
    {
      $this->Creditor_GetEntriesResult = $Creditor_GetEntriesResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditor_GetEntriesResult()
    {
      return $this->Creditor_GetEntriesResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesResult
     * @return \Economic\Creditor_GetEntriesResponse
     */
    public function setCreditor_GetEntriesResult($Creditor_GetEntriesResult)
    {
      $this->Creditor_GetEntriesResult = $Creditor_GetEntriesResult;
      return $this;
    }

}
