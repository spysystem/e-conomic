<?php

namespace Economic;

class CashBookEntry_GetDataArrayResponse
{

    /**
     * @var ArrayOfCashBookEntryData $CashBookEntry_GetDataArrayResult
     */
    protected $CashBookEntry_GetDataArrayResult = null;

    /**
     * @param ArrayOfCashBookEntryData $CashBookEntry_GetDataArrayResult
     */
    public function __construct($CashBookEntry_GetDataArrayResult)
    {
      $this->CashBookEntry_GetDataArrayResult = $CashBookEntry_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCashBookEntryData
     */
    public function getCashBookEntry_GetDataArrayResult()
    {
      return $this->CashBookEntry_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCashBookEntryData $CashBookEntry_GetDataArrayResult
     * @return \Economic\CashBookEntry_GetDataArrayResponse
     */
    public function setCashBookEntry_GetDataArrayResult($CashBookEntry_GetDataArrayResult)
    {
      $this->CashBookEntry_GetDataArrayResult = $CashBookEntry_GetDataArrayResult;
      return $this;
    }

}
