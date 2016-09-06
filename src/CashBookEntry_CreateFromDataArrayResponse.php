<?php

namespace Economic;

class CashBookEntry_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCashBookEntryHandle $CashBookEntry_CreateFromDataArrayResult
     */
    protected $CashBookEntry_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCashBookEntryHandle $CashBookEntry_CreateFromDataArrayResult
     */
    public function __construct($CashBookEntry_CreateFromDataArrayResult)
    {
      $this->CashBookEntry_CreateFromDataArrayResult = $CashBookEntry_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCashBookEntryHandle
     */
    public function getCashBookEntry_CreateFromDataArrayResult()
    {
      return $this->CashBookEntry_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCashBookEntryHandle $CashBookEntry_CreateFromDataArrayResult
     * @return \Economic\CashBookEntry_CreateFromDataArrayResponse
     */
    public function setCashBookEntry_CreateFromDataArrayResult($CashBookEntry_CreateFromDataArrayResult)
    {
      $this->CashBookEntry_CreateFromDataArrayResult = $CashBookEntry_CreateFromDataArrayResult;
      return $this;
    }

}
