<?php

namespace Economic;

class CashBookEntry_CreateCreditorInvoiceResponse
{

    /**
     * @var CashBookEntryHandle $CashBookEntry_CreateCreditorInvoiceResult
     */
    protected $CashBookEntry_CreateCreditorInvoiceResult = null;

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateCreditorInvoiceResult
     */
    public function __construct($CashBookEntry_CreateCreditorInvoiceResult)
    {
      $this->CashBookEntry_CreateCreditorInvoiceResult = $CashBookEntry_CreateCreditorInvoiceResult;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntry_CreateCreditorInvoiceResult()
    {
      return $this->CashBookEntry_CreateCreditorInvoiceResult;
    }

    /**
     * @param CashBookEntryHandle $CashBookEntry_CreateCreditorInvoiceResult
     * @return \Economic\CashBookEntry_CreateCreditorInvoiceResponse
     */
    public function setCashBookEntry_CreateCreditorInvoiceResult($CashBookEntry_CreateCreditorInvoiceResult)
    {
      $this->CashBookEntry_CreateCreditorInvoiceResult = $CashBookEntry_CreateCreditorInvoiceResult;
      return $this;
    }

}
