<?php

namespace Economic;

class DebtorEntry_GetAllOpenEntriesResponse
{

    /**
     * @var ArrayOfDebtorEntryHandle $DebtorEntry_GetAllOpenEntriesResult
     */
    protected $DebtorEntry_GetAllOpenEntriesResult = null;

    /**
     * @param ArrayOfDebtorEntryHandle $DebtorEntry_GetAllOpenEntriesResult
     */
    public function __construct($DebtorEntry_GetAllOpenEntriesResult)
    {
      $this->DebtorEntry_GetAllOpenEntriesResult = $DebtorEntry_GetAllOpenEntriesResult;
    }

    /**
     * @return ArrayOfDebtorEntryHandle
     */
    public function getDebtorEntry_GetAllOpenEntriesResult()
    {
      return $this->DebtorEntry_GetAllOpenEntriesResult;
    }

    /**
     * @param ArrayOfDebtorEntryHandle $DebtorEntry_GetAllOpenEntriesResult
     * @return \Economic\DebtorEntry_GetAllOpenEntriesResponse
     */
    public function setDebtorEntry_GetAllOpenEntriesResult($DebtorEntry_GetAllOpenEntriesResult)
    {
      $this->DebtorEntry_GetAllOpenEntriesResult = $DebtorEntry_GetAllOpenEntriesResult;
      return $this;
    }

}
