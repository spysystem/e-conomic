<?php

namespace Economic;

class CashBookEntry_CreateFromDataResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_CreateFromDataResult
     */
    protected $CashBookEntry_CreateFromDataResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateFromDataResult
     */
    public function __construct($CashBookEntry_CreateFromDataResult)
    {
      $this->CashBookEntry_CreateFromDataResult = $CashBookEntry_CreateFromDataResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_CreateFromDataResult()
    {
      return $this->CashBookEntry_CreateFromDataResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateFromDataResult
     * @return \Economic\CashBookEntry_CreateFromDataResponse
     */
    public function setCashBookEntry_CreateFromDataResult($CashBookEntry_CreateFromDataResult)
    {
      $this->CashBookEntry_CreateFromDataResult = $CashBookEntry_CreateFromDataResult;
      return $this;
    }

}
