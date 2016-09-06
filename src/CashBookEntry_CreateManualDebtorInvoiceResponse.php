<?php

namespace Economic;

class CashBookEntry_CreateManualDebtorInvoiceResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_CreateManualDebtorInvoiceResult
     */
    protected $CashBookEntry_CreateManualDebtorInvoiceResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateManualDebtorInvoiceResult
     */
    public function __construct($CashBookEntry_CreateManualDebtorInvoiceResult)
    {
      $this->CashBookEntry_CreateManualDebtorInvoiceResult = $CashBookEntry_CreateManualDebtorInvoiceResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_CreateManualDebtorInvoiceResult()
    {
      return $this->CashBookEntry_CreateManualDebtorInvoiceResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateManualDebtorInvoiceResult
     * @return \Economic\CashBookEntry_CreateManualDebtorInvoiceResponse
     */
    public function setCashBookEntry_CreateManualDebtorInvoiceResult($CashBookEntry_CreateManualDebtorInvoiceResult)
    {
      $this->CashBookEntry_CreateManualDebtorInvoiceResult = $CashBookEntry_CreateManualDebtorInvoiceResult;
      return $this;
    }

}
