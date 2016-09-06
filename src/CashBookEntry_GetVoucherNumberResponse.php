<?php

namespace Economic;

class CashBookEntry_GetVoucherNumberResponse
{

    /**
     * @var int $CashBookEntry_GetVoucherNumberResult
     */
    protected $CashBookEntry_GetVoucherNumberResult = null;

    /**
     * @param int $CashBookEntry_GetVoucherNumberResult
     */
    public function __construct($CashBookEntry_GetVoucherNumberResult)
    {
      $this->CashBookEntry_GetVoucherNumberResult = $CashBookEntry_GetVoucherNumberResult;
    }

    /**
     * @return int
     */
    public function getCashBookEntry_GetVoucherNumberResult()
    {
      return $this->CashBookEntry_GetVoucherNumberResult;
    }

    /**
     * @param int $CashBookEntry_GetVoucherNumberResult
     * @return \Economic\CashBookEntry_GetVoucherNumberResponse
     */
    public function setCashBookEntry_GetVoucherNumberResult($CashBookEntry_GetVoucherNumberResult)
    {
      $this->CashBookEntry_GetVoucherNumberResult = $CashBookEntry_GetVoucherNumberResult;
      return $this;
    }

}
