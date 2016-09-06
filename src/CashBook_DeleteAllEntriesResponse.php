<?php

namespace Economic;

class CashBook_DeleteAllEntriesResponse
{

    /**
     * @var CashBookHandle $CashBook_DeleteAllEntriesResult
     */
    protected $CashBook_DeleteAllEntriesResult = null;

    /**
     * @param CashBookHandle $CashBook_DeleteAllEntriesResult
     */
    public function __construct($CashBook_DeleteAllEntriesResult)
    {
      $this->CashBook_DeleteAllEntriesResult = $CashBook_DeleteAllEntriesResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBook_DeleteAllEntriesResult()
    {
      return $this->CashBook_DeleteAllEntriesResult;
    }

    /**
     * @param CashBookHandle $CashBook_DeleteAllEntriesResult
     * @return \Economic\CashBook_DeleteAllEntriesResponse
     */
    public function setCashBook_DeleteAllEntriesResult($CashBook_DeleteAllEntriesResult)
    {
      $this->CashBook_DeleteAllEntriesResult = $CashBook_DeleteAllEntriesResult;
      return $this;
    }

}
