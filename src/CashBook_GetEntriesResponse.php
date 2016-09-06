<?php

namespace Economic;

class CashBook_GetEntriesResponse
{

    /**
     * @var ArrayOfCashBookEntryHandle $CashBook_GetEntriesResult
     */
    protected $CashBook_GetEntriesResult = null;

    /**
     * @param ArrayOfCashBookEntryHandle $CashBook_GetEntriesResult
     */
    public function __construct($CashBook_GetEntriesResult)
    {
      $this->CashBook_GetEntriesResult = $CashBook_GetEntriesResult;
    }

    /**
     * @return ArrayOfCashBookEntryHandle
     */
    public function getCashBook_GetEntriesResult()
    {
      return $this->CashBook_GetEntriesResult;
    }

    /**
     * @param ArrayOfCashBookEntryHandle $CashBook_GetEntriesResult
     * @return \Economic\CashBook_GetEntriesResponse
     */
    public function setCashBook_GetEntriesResult($CashBook_GetEntriesResult)
    {
      $this->CashBook_GetEntriesResult = $CashBook_GetEntriesResult;
      return $this;
    }

}
