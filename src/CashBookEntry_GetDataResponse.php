<?php

namespace Economic;

class CashBookEntry_GetDataResponse
{

    /**
     * @var CashBookEntryData $CashBookEntry_GetDataResult
     */
    protected $CashBookEntry_GetDataResult = null;

    /**
     * @param CashBookEntryData $CashBookEntry_GetDataResult
     */
    public function __construct($CashBookEntry_GetDataResult)
    {
      $this->CashBookEntry_GetDataResult = $CashBookEntry_GetDataResult;
    }

    /**
     * @return CashBookEntryData
     */
    public function getCashBookEntry_GetDataResult()
    {
      return $this->CashBookEntry_GetDataResult;
    }

    /**
     * @param CashBookEntryData $CashBookEntry_GetDataResult
     * @return \Economic\CashBookEntry_GetDataResponse
     */
    public function setCashBookEntry_GetDataResult($CashBookEntry_GetDataResult)
    {
      $this->CashBookEntry_GetDataResult = $CashBookEntry_GetDataResult;
      return $this;
    }

}
