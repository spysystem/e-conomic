<?php

namespace Economic;

class CashBookEntry_GetTypeResponse
{

    /**
     * @var CashBookEntryType $CashBookEntry_GetTypeResult
     */
    protected $CashBookEntry_GetTypeResult = null;

    /**
     * @param CashBookEntryType $CashBookEntry_GetTypeResult
     */
    public function __construct($CashBookEntry_GetTypeResult)
    {
      $this->CashBookEntry_GetTypeResult = $CashBookEntry_GetTypeResult;
    }

    /**
     * @return CashBookEntryType
     */
    public function getCashBookEntry_GetTypeResult()
    {
      return $this->CashBookEntry_GetTypeResult;
    }

    /**
     * @param CashBookEntryType $CashBookEntry_GetTypeResult
     * @return \Economic\CashBookEntry_GetTypeResponse
     */
    public function setCashBookEntry_GetTypeResult($CashBookEntry_GetTypeResult)
    {
      $this->CashBookEntry_GetTypeResult = $CashBookEntry_GetTypeResult;
      return $this;
    }

}
