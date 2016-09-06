<?php

namespace Economic;

class CashBookEntry_CreateFinanceVoucherResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_CreateFinanceVoucherResult
     */
    protected $CashBookEntry_CreateFinanceVoucherResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateFinanceVoucherResult
     */
    public function __construct($CashBookEntry_CreateFinanceVoucherResult)
    {
      $this->CashBookEntry_CreateFinanceVoucherResult = $CashBookEntry_CreateFinanceVoucherResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_CreateFinanceVoucherResult()
    {
      return $this->CashBookEntry_CreateFinanceVoucherResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateFinanceVoucherResult
     * @return \Economic\CashBookEntry_CreateFinanceVoucherResponse
     */
    public function setCashBookEntry_CreateFinanceVoucherResult($CashBookEntry_CreateFinanceVoucherResult)
    {
      $this->CashBookEntry_CreateFinanceVoucherResult = $CashBookEntry_CreateFinanceVoucherResult;
      return $this;
    }

}
