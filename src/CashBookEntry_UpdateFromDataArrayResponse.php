<?php

namespace Economic;

class CashBookEntry_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCashBookEntryHandle $CashBookEntry_UpdateFromDataArrayResult
     */
    protected $CashBookEntry_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCashBookEntryHandle $CashBookEntry_UpdateFromDataArrayResult
     */
    public function __construct($CashBookEntry_UpdateFromDataArrayResult)
    {
      $this->CashBookEntry_UpdateFromDataArrayResult = $CashBookEntry_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCashBookEntryHandle
     */
    public function getCashBookEntry_UpdateFromDataArrayResult()
    {
      return $this->CashBookEntry_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCashBookEntryHandle $CashBookEntry_UpdateFromDataArrayResult
     * @return \Economic\CashBookEntry_UpdateFromDataArrayResponse
     */
    public function setCashBookEntry_UpdateFromDataArrayResult($CashBookEntry_UpdateFromDataArrayResult)
    {
      $this->CashBookEntry_UpdateFromDataArrayResult = $CashBookEntry_UpdateFromDataArrayResult;
      return $this;
    }

}
