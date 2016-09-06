<?php

namespace Economic;

class CashBookEntry_UpdateFromDataResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_UpdateFromDataResult
     */
    protected $CashBookEntry_UpdateFromDataResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_UpdateFromDataResult
     */
    public function __construct($CashBookEntry_UpdateFromDataResult)
    {
      $this->CashBookEntry_UpdateFromDataResult = $CashBookEntry_UpdateFromDataResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_UpdateFromDataResult()
    {
      return $this->CashBookEntry_UpdateFromDataResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_UpdateFromDataResult
     * @return \Economic\CashBookEntry_UpdateFromDataResponse
     */
    public function setCashBookEntry_UpdateFromDataResult($CashBookEntry_UpdateFromDataResult)
    {
      $this->CashBookEntry_UpdateFromDataResult = $CashBookEntry_UpdateFromDataResult;
      return $this;
    }

}
