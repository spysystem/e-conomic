<?php

namespace Economic;

class Debtor_GetEntriesResponse
{

    /**
     * @var ArrayOfDebtorEntryHandle $Debtor_GetEntriesResult
     */
    protected $Debtor_GetEntriesResult = null;

    /**
     * @param ArrayOfDebtorEntryHandle $Debtor_GetEntriesResult
     */
    public function __construct($Debtor_GetEntriesResult)
    {
      $this->Debtor_GetEntriesResult = $Debtor_GetEntriesResult;
    }

    /**
     * @return ArrayOfDebtorEntryHandle
     */
    public function getDebtor_GetEntriesResult()
    {
      return $this->Debtor_GetEntriesResult;
    }

    /**
     * @param ArrayOfDebtorEntryHandle $Debtor_GetEntriesResult
     * @return \Economic\Debtor_GetEntriesResponse
     */
    public function setDebtor_GetEntriesResult($Debtor_GetEntriesResult)
    {
      $this->Debtor_GetEntriesResult = $Debtor_GetEntriesResult;
      return $this;
    }

}
