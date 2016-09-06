<?php

namespace Economic;

class Debtor_GetOpenEntriesResponse
{

    /**
     * @var ArrayOfDebtorEntryHandle $Debtor_GetOpenEntriesResult
     */
    protected $Debtor_GetOpenEntriesResult = null;

    /**
     * @param ArrayOfDebtorEntryHandle $Debtor_GetOpenEntriesResult
     */
    public function __construct($Debtor_GetOpenEntriesResult)
    {
      $this->Debtor_GetOpenEntriesResult = $Debtor_GetOpenEntriesResult;
    }

    /**
     * @return ArrayOfDebtorEntryHandle
     */
    public function getDebtor_GetOpenEntriesResult()
    {
      return $this->Debtor_GetOpenEntriesResult;
    }

    /**
     * @param ArrayOfDebtorEntryHandle $Debtor_GetOpenEntriesResult
     * @return \Economic\Debtor_GetOpenEntriesResponse
     */
    public function setDebtor_GetOpenEntriesResult($Debtor_GetOpenEntriesResult)
    {
      $this->Debtor_GetOpenEntriesResult = $Debtor_GetOpenEntriesResult;
      return $this;
    }

}
