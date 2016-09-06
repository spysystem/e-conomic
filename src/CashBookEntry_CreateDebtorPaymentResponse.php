<?php

namespace Economic;

class CashBookEntry_CreateDebtorPaymentResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_CreateDebtorPaymentResult
     */
    protected $CashBookEntry_CreateDebtorPaymentResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateDebtorPaymentResult
     */
    public function __construct($CashBookEntry_CreateDebtorPaymentResult)
    {
      $this->CashBookEntry_CreateDebtorPaymentResult = $CashBookEntry_CreateDebtorPaymentResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_CreateDebtorPaymentResult()
    {
      return $this->CashBookEntry_CreateDebtorPaymentResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateDebtorPaymentResult
     * @return \Economic\CashBookEntry_CreateDebtorPaymentResponse
     */
    public function setCashBookEntry_CreateDebtorPaymentResult($CashBookEntry_CreateDebtorPaymentResult)
    {
      $this->CashBookEntry_CreateDebtorPaymentResult = $CashBookEntry_CreateDebtorPaymentResult;
      return $this;
    }

}
