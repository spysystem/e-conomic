<?php

namespace Economic;

class CashBookEntry_CreateResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_CreateResult
     */
    protected $CashBookEntry_CreateResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateResult
     */
    public function __construct($CashBookEntry_CreateResult)
    {
      $this->CashBookEntry_CreateResult = $CashBookEntry_CreateResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_CreateResult()
    {
      return $this->CashBookEntry_CreateResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateResult
     * @return \Economic\CashBookEntry_CreateResponse
     */
    public function setCashBookEntry_CreateResult($CashBookEntry_CreateResult)
    {
      $this->CashBookEntry_CreateResult = $CashBookEntry_CreateResult;
      return $this;
    }

}
